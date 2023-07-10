<?php 
include 'config/koneksi.php'


    include 'act/layout/header.php';
    // Tampil Halaman Index           
    if(!empty($_GET['page'] == 'alur')){
        include 'act/admin/alur.php';
    }elseif(!empty($_GET['page'] == 'crud')){
        include 'act/admin/crud.php';
    }elseif(!empty($_GET['page'] == 'recruitment')){
        include 'act/admin/level.php';
    }elseif(!empty($_GET['page'] == 'level')){
        include 'act/admin/level.php';
    }elseif(!empty($_GET['page'] == 'tipe')){ 
        include 'act/admin/default.php';
    }
     else {
        require 'act/admin/dashboard/index.php';
    }
    include 'act/layout/footer.php';
    include 'act/layout/filejs.php';
    if(!empty($_GET['page'] == 'coba')){
        require 'act/admin/coba/js.php';
    }
    ?>

    </div>
    <!-- ./wrapper -->
</body>

</html>