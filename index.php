<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
if(!$_SESSION['username']){
  header('Location:index.php?session=expired');
}
?>
<?php include('koneksi.php');?>
<body>
    <!-- Main content -->
    <?php
    if (isset($_GET['page'])){
    if($_GET['page']=='daftarfilm'){
      include('daftarfilm.php');
    }
    //siswa
    else if($_GET['page']=='view_csiswa'){
      include('view_csiswa.php');
    }
    else if($_GET['page']=='insert_csiswa'){
      include('insert_csiswa.php');
    }
    else if($_GET['page']=='view_pilihansiswa'){
      include('view_pilihansiswa.php');
    }
    else if($_GET['page']=='insert_pilihansiswa'){
      include('insert_pilihansiswa.php');
    }
    else if($_GET['page']=='update_pilihansiswa'){
      include('update_pilihansiswa.php');
    }
    // admin
    else if($_GET['page']=='view_adminsiswa'){
      include('view_adminsiswa.php');
    }
    else if($_GET['page']=='insert_adminsiswa'){
      include('insert_adminsiswa.php');
    }
    else if($_GET['page']=='insert_kajur'){
      include('insert_kajur.php');
    }
    else if($_GET['page']=='update_adminsiswa'){
      include('update_adminsiswa.php');
    }
    else if($_GET['page']=='view_kajur'){
      include('view_kajur.php');
    }
    else if($_GET['page']=='update_kajur'){
      include('update_kajur.php');
    }
    else if($_GET['page']=='view_user'){
      include('view_user.php');
    }
    else if($_GET['page']=='update_user'){
      include('update_user.php');
    }
    else if($_GET['page']=='insert_user'){
      include('insert_user.php');
    }
    else if($_GET['page']=='view_adminjurusan'){
      include('view_adminjurusan.php');
    }
    else if($_GET['page']=='insert_adminjurusan'){
      include('insert_adminjurusan.php');
    }
    else if($_GET['page']=='update_adminjurusan'){
      include('update_adminjurusan.php');
    }
    else if($_GET['page']=='view_adminpilihan'){
      include('view_adminpilihan.php');
    }
    else if($_GET['page']=='insert_adminpilihan'){
      include('insert_adminpilihan.php');
    }
    else if($_GET['page']=='update_adminpilihan'){
      include('update_adminpilihan.php');
    }
    else{
      include('not_found.php');
    }
  }
  else{
    include('dashboard.php');
  }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('footer.php'); ?>
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

</body>
</html>
