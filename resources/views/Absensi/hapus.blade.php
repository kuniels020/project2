<?php
include 'config.php';

$id = $_GET['id'];

$query = "DELETE FROM kehadiran WHERE id=$id";
$result = mysqli_query($db, $query);

if($result){
    header('Location: tabel-kehadiran.php');
} else {
    echo "Gagal menghapus data.";
}
?>