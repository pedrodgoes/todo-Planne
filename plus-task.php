<?php

include 'db/config.php';

$title = $_POST['title'];
$description = $_POST['description'];

$sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo 1;
} else {
    echo 0;
}

?>
