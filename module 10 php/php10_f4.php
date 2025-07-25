<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_unset();
    session_destroy();
    header('Location: php10_f1.php');
    exit;
} else {
    header('Location: php10_f1.php');
    exit;
}