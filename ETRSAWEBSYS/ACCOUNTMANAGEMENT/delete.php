<?php
require "conn.php";

$id = isset($_GET['Uid']) ? $_GET['Uid'] : null;

if ($id !== null) {
    $sql = "DELETE FROM usersreal WHERE Uid = '$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Record deleted successfully!'); window.location.href = '/WEBSYS/ETRSAWEBSYS/ACCOUNTMANAGEMENT/account.php';</script>";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    echo "UID not provided.";
}
?>
