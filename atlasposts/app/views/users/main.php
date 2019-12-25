<?php require APPROOT . '/views/inc/header.php' ; ?>
<link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

<div id="wrapper">
    <!-- Sidebar -->
    <?php require APPROOT . '/views/inc/sidebar.php' ; ?>
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a><?php   
                            $this->userModel->GetLoginDetails($data);
                            echo($_SESSION['logindetails']['type']);
                        ?>
                    </a>
                </li>
            </ol>
            <!-- Area Chart Example-->
            <div class="card mb-3">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <?php
                        $this->userModel->GetLoginDetails($data);
                    ?>
                    <strong><label for="male">acnKaynakKod: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['acnKaynakKod'])?></br>
                    <strong><label for="male">acnNo: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['acnNo'])?></br>
                    <strong><label for="male">acnSubeKod: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['acnSubeKod'])?></br>
                    <strong><label for="male">email: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['email'])?></br>
                    <strong><label for="male">mustKaynakKod: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['mustKaynakKod'])?></br>
                    <strong><label for="male">mustNo: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['mustNo'])?></br>
                    <strong><label for="male">mustSubeKod: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['mustSubeKod'])?></br>
                    <strong><label for="male">otorRef: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['otorRef'])?></br>
                    <strong><label for="male">title: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['title'])?></br>
                    <strong><label for="male">yetkiKod: </label></strong>&nbsp;<?php echo ($_SESSION['logindetails']['yetkiKod'])?></br>

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
