<?php

//include koneksi database
include('config/koneksi.php');

//get data dari form
$id     = $_POST['id_alur'];
$nama_alur = $_POST['nama_alur'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE alur_belajar SET id_alur = '$id', nama_alur = '$nama_alur'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
