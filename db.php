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
    $uid = time() . rand(1000, 9999);

    $stmt = $conn->prepare("INSERT INTO comment (uid, comment) VALUES (?, ?)");
    $stmt->bind_param("ss", $uid, $comment);
    $stmt->execute();
    $stmt->close();
}

function getComments() {
    global $conn;
    $query = "SELECT * FROM comment ORDER BY id DESC";
    $result = $conn->query($query);
    return $result;
}
?>