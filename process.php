<?php
include 'connectMySQL.php';
include 'home.php';

$query = "SELECT * FROM users WHERE username = '$username' AND status = 'ACTIVE'";
$result = $conn->query($query);