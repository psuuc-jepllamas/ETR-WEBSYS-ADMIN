<?php
include 'conn.php';

if(isset($_POST['approved'])){

  $id = $_GET['id'];
$sql = "UPDATE `thumbnails` SET `id`='[value-1]',`image_path`='[value-2]',`thumbname`='[value-3]',`description`='[value-4]',`created_at`='[value-5]',`campus`='[value-6]',`status`='Approved' WHERE id = $id";

$result = mysqli_query($conn, $sql);

header('Location: campaign.php');
}

?>
