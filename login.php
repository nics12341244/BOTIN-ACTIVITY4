<?php

$conn = mysqli_connect("localhost", "root", "", "botin");

if (!$conn) {
    die("Connection failed");
}

$ID = $_POST['ID'];
$password = $_POST['password'];


$sql = "SELECT * FROM students WHERE ID = '$ID' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "congrats";
    exit();
} else {
    echo "Login failed!";
}

mysqli_close($conn);
?>
