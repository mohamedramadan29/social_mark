<?php

/*
Created by mohamed ramadan
Email:mr319242@gmail.com
Phone:01011642731
*/
session_start();
$pagetitle = " اعمالنا - سوشل مارك ";
ob_start();
include "init.php";?>

<div class="serv">
    <div class="container-fluid">
        <div class="data">
            <h1> اعمالنا </h1>
            <h3> <a href="index.php"> الرئيسية </a>/اعمالنا </h3>
        </div>
    </div>
</div>
<div class="myserv">
    <div class="container-fluid">
        <div class="data">
            <h1> اعمالنا </h1>
            <div class="row">
                <?php
                $stmt = $connect->prepare("SELECT * FROM serv");
                $stmt->execute();
                $count = $stmt->rowCount();
                $allserv = $stmt->fetchall();
                foreach ($allserv as $serv){ ?>
                    <div class="col-lg-3 col-md-6">
                        <div class="info wow fadeInUp" data-wow-duration="0.8s">
                            <img src="admin/uploads/<?php echo $serv["serv_image"]?>">
                            <div class="overlay">
                                <h3><?php echo $serv["serv_name"]?> </h3>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>


<?php
include $tem."footer_linked.php";
include $tem."footer.php";
ob_end_flush();


?>
