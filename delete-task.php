<?php

include 'db/config.php';

$id = $_POST['id'];

$sql = "DELETE FROM tasks WHERE id='$id'";
$res = mysqli_query($conn, $sql);

if ($res) {
    echo 1;
} else {
    echo 0;
}
?>
