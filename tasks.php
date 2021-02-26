<?php

include 'db/config.php';

$sql = 'SELECT * FROM tasks';
$res = mysqli_query($conn, $sql);

if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) { ?>

<li>
    <div class="note">
    <span class="text title"><?php echo $row['title']; ?></span>
    <span class="text"><?php echo $row['description']; ?></span>
    </div>
    <i id="deleteBtn" class="icon fa fa-trash" 
    data-id="<?php echo $row['id']; ?>"></i>
    <input type="hidden">
</li>

<?php }
    echo '<div class="pending">Você tem ' .
        mysqli_num_rows($res) .
        ' notas pendentes.</div>';
} else {
    echo '<div class="pending">Você não possui notas pendentes.</div>';
}

?>
