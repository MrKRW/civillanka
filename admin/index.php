<?php
/**
 * CivilLanka – Admin Entry Point
 * Redirects to login or dashboard based on session.
 */
session_start();

if (!empty($_SESSION['admin_id'])) {
    header('Location: dashboard.php');
} else {
    header('Location: login.php');
}
exit;
