<?php
include 'panggil.php';

?>
<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
    <h3>Membuat Kelas Master</h3>
</header>
  <body>
<!--Sidebar Index-->
<div class="container-fluid">  
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Menu</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
<div class="kelas master">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
     Kelas Master
  </a>
  <ul class="dropdown-kelas master">
    <li><a class="dropdown-item" href="#">Alur kelas</a></li>
    <li><a class="dropdown-item" href="#">Tipe kelas</a></li>
    <li><a class="dropdown-item" href="#">Level kelas</a></li>
  </ul>
</div>