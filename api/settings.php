<?php
/**
 * CivilLanka – Settings API (password change)
 */
session_start();
require_once __DIR__ . '/../config/db.php';

header('Content-Type: application/json; charset=utf-8');

if (empty($_SESSION['admin_id'])) {
    jsonResponse(['error' => 'Unauthorized'], 401);
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    jsonResponse(['error' => 'POST required'], 405);
}

$currentPw = $_POST['current_password'] ?? '';
$newPw     = $_POST['new_password'] ?? '';
$confirmPw = $_POST['confirm_password'] ?? '';

if ($currentPw === '' || $newPw === '' || $confirmPw === '') {
    jsonResponse(['error' => 'All fields are required'], 400);
}
if ($newPw !== $confirmPw) {
    jsonResponse(['error' => 'Passwords do not match'], 400);
}
if (strlen($newPw) < 6) {
    jsonResponse(['error' => 'Password must be at least 6 characters'], 400);
}

$db   = getDB();
$stmt = $db->prepare('SELECT * FROM admin_users WHERE id = :id');
$stmt->execute([':id' => $_SESSION['admin_id']]);
$user = $stmt->fetch();

if (!$user || !password_verify($currentPw, $user['password'])) {
    jsonResponse(['error' => 'Current password is incorrect'], 403);
}

$hash = password_hash($newPw, PASSWORD_BCRYPT);
$stmt = $db->prepare('UPDATE admin_users SET password = :pw WHERE id = :id');
$stmt->execute([':pw' => $hash, ':id' => $_SESSION['admin_id']]);

jsonResponse(['success' => true]);
