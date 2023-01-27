<?php 
/*
Created by mohamed ramadan
Email:mr319242@gmail.com
Phone:01011642731

*/

$pagetitle = "Admin Page";
ob_start();
session_start();
$Nonavbar="";
include "init.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$adminname=$_POST["adminname"];
$adminpass = $_POST["password"];
  $stmt = $connect->prepare("SELECT admin_name, admin_password FROM admin WHERE admin_name=?
  AND admin_password=?");
    $stmt->execute(array($adminname, $adminpass));
    $data = $stmt->fetch();
    $admindata = $stmt->rowcount();
if ($admindata > 0) {
	$_SESSION['admin']    = $adminname;
	$_SESSION['admin_id'] = $row['admin_id'];
	header('Location:dashboard.php');
	exit();

}
    
}




?>
<body class="loginhere">
<div class="login">

<div class="container">
  
    <div class="row">
    
        <form class="form-group login_form" method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <h1> Admin Login </h1>
    
            <label> Name </label>
            <input class="form-control" type="text" name="adminname" autocomplete="off" />
            
            <label>Password</label>
            
            <input class="form-control" type="password" name="password"/>
            <input class="btn btn-primary" type="submit" value="Login" />

        </form>
    
    </div>
    
    </div>

</div>



<!-- END FOOTER -->
<?php
include $tem."footer.php";
ob_end_flush();
 ?>