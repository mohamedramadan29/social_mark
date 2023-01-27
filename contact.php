<?php

/*
Created by mohamed ramadan
Email:mr319242@gmail.com
Phone:01011642731
*/
session_start();
$pagetitle = " طلب خدمة - سوشل مارك ";
ob_start();
include "init.php";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $name        = $_POST["name"];
    $mobile       = $_POST["mobile"];
    $email       = $_POST["email"];
    $store = $_POST["store"];
    $info = $_POST["info"];

    $stmt = $connect->prepare("INSERT INTO info (info_name,info_mobile,info_email,info_store,info_info) VALUES
                    (:zname , :zmobile,:zemail,:zstore,:zinfo)");
    $stmt->execute(array(
        "zname"=>$name,
        "zmobile"=>$mobile,
        "zemail"=>$email,
        "zstore"=>$store,
        "zinfo"=>$info
    ));

    if($stmt){?>

        <div class="container">
            <div class="mymessage col-md-5">
                <div class="message">  شكرا لك على تواصلك معنا سنتواصل معك فى اقرب وقت  </div>
                <button class="btn btn-danger"> <i class="fa fa-close"></i> </button>
            </div>


        </div>



        <?php
    }


}


?>
<div class="serv mycontact">
    <div class="container">
        <div class="data">
            <h1> طلب خدمة </h1>
            <h3> <a href="index.php"> الرئيسية </a>/طلب خدمة </h3>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="data">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <div class="myform">
                            <form class="form-group" method="post" action="">
                                <div class="input_box">
                                    <label>  <span> * </span> الاسم </label>
                                    <input class="form-control" type="text" name="name" required>
                                </div>
                                <div class="input_box">
                                    <label><span> * </span> رقم الجوال </label>
                                    <input class="form-control" type="text" name="mobile" required>
                                </div>
                                <div class="input_box">
                                    <label>  <span> * </span>البريد الالكترونى   </label>
                                    <input class="form-control" type="text" name="email" required>
                                </div>
                                <div class="input_box">
                                    <label> اسم النشاط او المتجر</label>
                                    <input class="form-control" type="text" name="store">
                                </div>
                                <div class="input_box">
                                    <label>  <span> * </span> رسالتك</label>
                                    <textarea required class="form-control" type="text" name="info"></textarea>
                                </div>
                                <input class="btn btn-primary" type="submit" value="ارسل طلب ">

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 co-md-12">
                    <div class="info stay">
                        <h3> ابقى على تواصل </h3>
                        <ul class="list-unstyled">
                            <li> <a href="mailto:mr319242@gmail.com">mr319242@gmail.com</a> <i class="fa fa-envelope-open"></i> </li>
                            <li>   <a href="https://api.whatsapp.com/send?phone=+9660507107605" target="_blank"> 0507107605  <i class="fa fa-whatsapp"></i> </a> </li>

                        </ul>
                        <ul class="list-unstyled link_s">
                            <li> <a href="https://api.whatsapp.com/send?phone=+9660507107605"> <i class="fa fa-whatsapp"></i> </a> </li>
                            <li> <a href="https://mobile.twitter.com/socialimark"> <i class="fa fa-twitter"></i></a> </li>
                            <li> <a href="https://instagram.com/socialimark?r=nametag"><i class="fa fa-instagram"></i></a>  </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php
include $tem."footer_linked.php";
include $tem."footer.php";
ob_end_flush();


?>
