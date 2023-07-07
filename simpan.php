<?php

//include koneksi database
include 'panggil.php';

//get data dari form
$id     = $_POST['id'];
$nama_alur = $_POST['nama_alur'];

//query insert data ke dalam database
$query = "INSERT INTO `alur_belajar` (`id_alur`, `nama_alur`) VALUES ('$id', '$nama_alur');";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tambah_data.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>