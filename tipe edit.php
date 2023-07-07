<?php 
  
  include('config/koneksi.php');
  
  $id = $_GET['id_tipe_kategori'];
  
  $query = "SELECT * FROM tipe_kelas WHERE id_tipe_kategori= $id LIMIT 1";

  $result = mysqli_query($koneksi, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Tipe Kelas</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT TIPE KELAS
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>ID</label>
                  <input type="text" name="id" value="<?php echo $row['id_tipe_kelas'] ?>" placeholder="" class="form-control">
                  <input type="hidden" name="id_alur" value="<?php echo $row['id_tipe_kelas'] ?>">

                </div>

                <div class="form-group">
                  <label>Nama Tipe </label>
                  <input type="text" name="nama_tipe" value="<?php echo $row['nama_tipe'] ?>" placeholder="" class="form-control">
                </div>
                

                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>