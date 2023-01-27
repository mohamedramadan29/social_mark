<?php
ob_start();
$pagetitle = "Services-Reports";
session_start();
if (isset($_SESSION["admin"])) {
    include "init.php";?>
    <body class="car_page">
    <?php
    $stmt = $connect->prepare("SELECT * FROM serv");
    $stmt->execute();
    $count = $stmt->rowCount();
    $allserv = $stmt->fetchall();
    if ($count > 0) {?>
        <div class="container-fluid report">
        <h2 class="text-center">  تقرير عن جيمع الاعمال</h2>
        <div class="table-responsive mytable">
        <table class="table table-bordered text-center">
        <button class="btn btn-primary"> <a href="serv.php?page=add"> اضافة عمل جديد </a></button>

        <tr>
            <td> اسم العمل</td>
            <td>  الصورة </td>
            <td> &nbsp;</td>
        </tr>
        <?php
        foreach ($allserv as $serv) {?>
            <tr>
                <td> <?php echo $serv["serv_name"]; ?> </td>
                <td> <img src="uploads/<?php echo  $serv["serv_image"]; ?>"></td>
                <div class="button">
                    <td> <a class="btn btn-primary" href="serv.php?page=edit&servid=<?php echo $serv["serv_id"] ?>" title=""> Edit <i class="fa fa-edit"></i> </a>
                        <a class="btn btn-danger confirm" href="serv.php?page=delete&servid=<?php echo $serv["serv_id"] ?>" title=""> Delete <i class="fa fa-close"></i> </a>
                    </td>
                </div>
            </tr>
            <?php
        }
    }else{
        ?>
        <br />
        <br /><br /><br /><br /><br />

        <div class="container">
            <h2 class="text-center">  لا يوجد اعمال </h2>
            <button class="btn btn-primary"> <a href="serv.php?page=add">  اضافة عمل جديد </a></button>
        </div>
        <?php
    }
    ?>


    </table>
    </div>
    </div>

    <?php


}
else{?>
    <div class="container">
        <h2 class="text-center">  لا يوجد اعمال الان </h2>
    </div>
    <?php
}

include $tem . "footer.php";


ob_end_flush();
?>