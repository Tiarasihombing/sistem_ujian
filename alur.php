<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Alur Belajar</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              KELAS ALUR
            </div>
            <div class="card-body">
              <a href="tambah_data.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Alur</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config/koneksi.php');
                      $no = 1;
                      $query = mysqli_query($koneksi,"SELECT * FROM alur_belajar");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['id_alur'] ?></td>
                      <td><?php echo $row['nama_alur'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id_alur=<?php echo $row['id_alur'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus_alur.php?id=<?php echo $row['id_alur'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
                    
                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>