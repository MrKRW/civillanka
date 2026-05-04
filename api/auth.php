<?php
/**
 * CivilLanka – Authentication API
 *
 * POST ?action=login   { username, password }
 * POST ?action=logout
 * GET  ?action=check
 */
session_start();
require_once __DIR__ . '/../config/db.php';

header('Content-Type: application/json; charset=utf-8');

$action = $_GET['action'] ?? $_POST['action'] ?? '';

switch ($action) {

    /* ── LOGIN ───────────────────────────────────── */
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            jsonResponse(['error' => 'POST required'], 405);
        }

        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';

        if ($username === '' || $password === '') {
            jsonResponse(['error' => 'Username and password are required'], 400);
        }

        $db   = getDB();
        $stmt = $db->prepare('SELECT * FROM admin_users WHERE username = :u LIMIT 1');
        $stmt->execute([':u' => $username]);
        $user = $stmt->fetch();

        if (!$user || !password_verify($password, $user['password'])) {
            jsonResponse(['error' => 'Invalid credentials'], 401);
        }

        $_SESSION['admin_id']   = $user['id'];
        $_SESSION['admin_user'] = $user['username'];
        $_SESSION['admin_name'] = $user['full_name'];

        jsonResponse(['success' => true, 'user' => $user['username']]);
        break;

    /* ── LOGOUT ──────────────────────────────────── */
    case 'logout':
        session_destroy();
        jsonResponse(['success' => true]);
        break;

    /* ── SESSION CHECK ───────────────────────────── */
    case 'check':
        if (!empty($_SESSION['admin_id'])) {
            jsonResponse(['authenticated' => true, 'user' => $_SESSION['admin_user']]);
        }
        jsonResponse(['authenticated' => false], 401);
        break;

    default:
        jsonResponse(['error' => 'Unknown action'], 400);
}
