<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'arcade';
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
    http_response_code(500);
    echo json_encode(['error' => true, 'message' => 'Database connection failed']);
    exit;
}
$mysqli->set_charset('utf8mb4');
?>
