<?php

//include koneksi database
include 'panggil.php';


//get data dari form
$id     = $_POST['id'];
$nama_tipe = $_POST['nama_tipe'];

//query insert data ke dalam database
$query = "INSERT INTO `tipe_kelas` (`id_tipe_kelas`, `nama_tipe`) VALUES ('$id', '$nama_tipe')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($koneksi->query($query)) {

    //redirect ke halaman index.php 
    header("location: tambah_data2.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>