<?php
ob_start();
$pagetitle = "خدماتنا";
session_start();
if (isset($_SESSION['admin'])) {
include "init.php";
?>
<body class="car_page">
<?php
$page = "";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
}else{
    $page = "Manage";
}

if ($page == "add") {?>
    <div class="container">

        <div class="box">
            <h2 class="text-center"> Add Services </h2>
            <form method="POST" action="" enctype="multipart/form-data">
                <!-- START NAME SERVICE -->
                <div class="inputbox">
                    <label> الاسم </label>
                    <input class="form-control" type="text" name="sname" required="" autocomplete="off">
                </div>
                <div class="inputbox">
                    <input type="file" name="simage" required="">
                </div>

                <input class="btn btn-block" type="submit" name="" value=" اضافة عمل جديد">

            </form>
        </div>
    </div>
    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $image_name = $_FILES["simage"]["name"];
        $image_tem  = $_FILES["simage"]["tmp_name"];
        $image_type = $_FILES["simage"]["type"];
        $image_size = $_FILES["simage"]["size"];
        $image_allowed_extention = array("jpg" , "jpeg" , "png" , "gif","svg","jfif");
        $image_extention = strtolower(end(explode(".", $image_name)));


        $sname     = $_POST["sname"];

        $errors = array();


        foreach ($errors as $error) {
            ?>
            <div class="container">
                <div class="dan_message">
                    <div class="message"> <?php echo $error; ?> :( </div>

                </div>

            </div>
            <?php
        }
        if (empty($errors)) {

            $image_uploaded = rand(0, 100000000).".".$image_name;
            move_uploaded_file($image_tem,"uploads/".$image_uploaded );
            $stmt = $connect->prepare("INSERT INTO serv (serv_name,serv_image)
			 VALUES (:zname,:zimge)");
            $stmt->execute(array(
                "zname"=>$sname,
                "zimge"=>$image_uploaded
            ));
            if ($stmt) {?>
                <div class="container">
                    <div class="suc_message">
                        <div class="message alert alert-success">  تم اضافة العمل الجديد :) </div>
                    </div>
                </div>
                <?php
            }
        }
    }

}elseif ($page == "edit") {
    if (isset($_GET["servid"]) && is_numeric($_GET["servid"])) {
        $servid = $_GET["servid"];
        $stmt   = $connect->prepare("SELECT * FROM serv WHERE serv_id= ?");
        $stmt->execute(array($servid));
        $servinfo = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count > 0) {
            ?>
            <div class="container edit_serv">
                <div class="row">
                    <div class="box">
                        <h2 class="text-center"><?php echo $servinfo["serv_name"]; ?> </h2>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- START NAME SERVICES -->
                            <div class="inputbox">
                                <input type="hidden" name="servid" value="<?php echo $servid ?>">
                                <label> Name </label>
                                <input class="form-control" type="text" name="sname" required="" autocomplete="off" value="<?php echo $servinfo["serv_name"]; ?>">
                            </div>

                            <!-- START IMAGE -->
                            <div class="inputbox">
                                <input type="file" name="simage" value="<?php echo $servinfo["serv_image"]; ?>">
                            </div>
                            <input class="btn btn-block" type="submit" name="" value=" تعديل العمل">
                        </form>
                    </div>
                </div>
            </div>
            <?php
            // UPDATE SERVICES
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $image_name = $_FILES["simage"]["name"];
                $image_tem  = $_FILES["simage"]["tmp_name"];
                $image_type = $_FILES["simage"]["type"];
                $image_size = $_FILES["simage"]["size"];
                $image_allowed_extention = array("jpg" , "jpeg" , "png" , "gif","svg","jfif");
                $image_extention = strtolower(end(explode(".", $image_name)));


                $servid = $_POST["servid"];
                $sname    = $_POST["sname"];
                $errors = array();
                if (strlen($sname) < 3) {
                    $errors[] = "Insert Complete Name";
                }

                foreach ($errors as $error) {
                    ?>
                    <div class="container">
                        <div class="dan_message">
                            <div class="message"> <?php echo $error; ?> :( </div>
                        </div>
                    </div>
                    <?php
                }
                if (empty($errors)) {
                    if($image_tem !=""){
                        $image_uploaded = rand(0, 100000000).".".$image_name;
                        move_uploaded_file($image_tem,"upload//".$image_uploaded );
                        $stmt = $connect->prepare("UPDATE serv SET serv_name=?,serv_image=?
	    	 WHERE serv_id=?");
                        $stmt->execute(array($sname ,$image_uploaded, $servid));
                        if ($stmt) {?>
                            <div class="container">
                                <div class="suc_message">
                                    <div class="message alert alert-success"> تم تعديل العمل بنجاح :) </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        $stmt = $connect->prepare("UPDATE serv SET serv_name=? WHERE serv_id=?");
                        $stmt->execute(array($sname , $servid));
                        if ($stmt) {?>
                            <div class="container">
                                <div class="suc_message">
                                    <div class="message alert alert-success">  تم تعديل العمل بنجاح  :) </div>
                                </div>
                            </div>
                            <?php
                        }



                    }
                }





            }
        }
    }
} elseif ($page =="delete") {
    if (isset($_GET["servid"]) && is_numeric($_GET["servid"])) {
        $servid = $_GET["servid"];

        $stmt = $connect->prepare("SELECT * FROM serv WHERE serv_id = ?");
        $stmt->execute(array($servid));
        $count = $stmt->rowCount();
        if ($count > 0) {
            $stmt = $connect->prepare("DELETE FROM serv WHERE serv_id=?");
            $stmt->execute(array($servid));
            if ($stmt) {
                echo "<div class='alert alert-danger danger_message'>" .$stmt->rowcount(). "  تم حذف هذا العمل </div>";
            }
        }

    }
}



include $tem . "footer.php";
}
ob_end_flush();
?>
