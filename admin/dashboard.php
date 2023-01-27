<?php
ob_start();
$pagetitle = "Dashboard";
session_start();
if (isset($_SESSION["admin"])) {
    include "init.php";?>
    <body class="car_page">
<div class="dasha">
    <div class="container">
        <div class="data">
            <div class="row">
          <div class="col-lg-4 col-md-6">
             <div class="info">
               <h3> <a href="message.php"> مشاهدة الرسائل </a></h3>
               <?php
$stmt = $connect->prepare("SELECT COUNT(info_name) FROM info");
$stmt->execute();
$allmessage= $stmt->fetchColumn();

                ?>
               <span> <a href="message.php">  <?php echo $allmessage; ?> </a> </span>
            </div>
        </div>
                <div class="col-lg-4 col-md-6">
                    <div class="info">
                        <h3> <a href="serv_report.php"> الاعمال </a></h3>
                        <?php
                        $stmt = $connect->prepare("SELECT COUNT(serv_name) FROM serv");
                        $stmt->execute();
                        $allmessage= $stmt->fetchColumn();

                        ?>
                        <span> <a href="serv_report.php">  <?php echo $allmessage; ?> </a> </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





  <?php  
}
    include $tem . "footer.php";


ob_end_flush();
 ?>