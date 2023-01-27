<?php

/*
Created by mohamed ramadan
Email:mr319242@gmail.com
Phone:01011642731
*/
session_start();
$pagetitle = " خدماتنا - سوشل مارك ";
ob_start();
include "init.php";?>

<div class="serv">
    <div class="container">
        <div class="data">
            <h1> خدماتنا </h1>
            <h3> <a href="index.php"> الرئيسية </a>/خدماتنا </h3>
        </div>
    </div>
</div>

<div class="main_serv" style="overflow: hidden">
    <div class="container">
        <div class="data">
            <h1> خدماتنا  </h1>
            <div class="row">
                <div class="col-lg-4">
                    <div class="info">
                        <img src="uploads/s1.png">
                        <h1> تصميم المواقع الإلكترونية </h1>
                        <ul class="list-unstyled">
                            <li>  تطوير المواقع </li>
                            <li>  جحز استضافة ورفع الموقع على الانترنت </li>
                            <li>  تصميمها كاملاً بـ HTML و CSS </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <img src="uploads/s2.png">
                        <h1> تصميم شعارات  </h1>
                        <ul class="list-unstyled">
                            <li>  تصميم شعار (لوقو) مبتكر ومميز مخصص لنشاطك  </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <img src="uploads/s3.png">
                        <h1> ادارة حسابات السوشل ميديا و ادارة المحتوى </h1>
                        <ul class="list-unstyled media">
                            <li><i class="fa fa-instagram"></i> الأنستقرام </li>
                            <li><i class="fa fa-twitter"></i>  تويتر </li>
                        </ul>
                        <ul class="list-unstyled media">
                            <li> <i class="fa fa-facebook"></i>فيسبوك</li>
                            <li><i class="fa fa-snapchat"></i> سناب شات</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <img src="uploads/s4.png">
                        <h1> تصميم بوست فردي او طلب خاص  </h1>
                        <ul class="list-unstyled">
                            <li> اذا كان لديك طلب خاص او تصميم خاص تفضل اطلب خدمة </li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="info">
                        <img src="uploads/s6.png">
                        <h1> تصميم موشن جرافيك اعلاني مع تعليق صوتي </h1>
                        <ul class="list-unstyled">
                            <li> مقاسات متاحه لجميع برامج السوشل ميديا </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="myservices">
    <div class="container">
        <div class="data">

            <div class="row">
                <div class="col-lg-6">
                    <div class="info">
                        <ul class="list-unstyled">
                            <li>
                               <div class="info1">
                                   <span>  <i class="fa fa-users"></i> </span>
                               </div>
                                <div class="info2">
                                    <h3> فريق عمل احترافى </h3>
                                </div>
                            </li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div class="info1">
                                    <span>  <i class="fa fa-map-marker"></i> </span>
                                </div>

                                <div class="info2">
                                    <h3> الهدف المنشود </h3>
                                </div>

                            </li>
                        </ul>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div class="info1">
                                    <span>  <i class="fa fa-rocket"></i> </span>
                                </div>

                                <div class="info2">
                                    <h3> ضمان النجاح </h3>
                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="myinfo">
                        <ul class="list-unstyled">
                            <li class=" wow pulse infinite"  data-wow-duration="3s"> <img src="uploads/socail.png"> </li>
                            <li class=" wow pulse infinite"  data-wow-duration="4s"> <img src="uploads/socail2.png"> </li>
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
