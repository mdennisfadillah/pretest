<?php
$host = 'localhost';
$dbname = 'pretest_db';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function createComment($comment) {
    global $conn;
    
    $query = "INSERT INTO comment (comment) VALUES ('$comment')";
    $conn->query($query);
}

function getComments() {
    global $conn;
    $query = "SELECT * FROM comment";
    $result = $conn->query($query);
    return $result;
}
?>