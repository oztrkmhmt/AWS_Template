 <!-- Sidebar -->
 <?php require APPROOT . '/views/inc/header.php' ; ?>


  <div id="wrapper">

    <!-- Sidebar -->
    <?php require APPROOT . '/views/inc/sidebar.php' ; ?>


    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Anasayfa</a>
          </li>
          <li class="breadcrumb-item active">Ürünler</li>
        </ol>

        <!-- Area Chart Example-->
        <div class="card mb-3">
          <div class="card-header">
            </div>
          <div class="card-body">
            <canvas id="myAreaChart" width="100%" height="30"></canvas>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php require APPROOT . '/views/inc/footer.php' ; ?>

  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
</body>

</html>
