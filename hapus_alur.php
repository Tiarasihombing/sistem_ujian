<?php
include ('config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM alur_belajar WHERE id_alur = '$id'";

if($koneksi->query($query)) {
    header("location:alur.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>