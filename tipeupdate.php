<?php

//include koneksi database
include('config/koneksi.php');

//get data dari form
$id     = $_POST['id_tipe_kelas'];
$nama_alur = $_POST['nama_tipe'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tipe_kelas SET id_tipe_kelas = '$id', nama_tipe = '$nama_tipe'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman index.php 
    header("location: tambah_data2.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
