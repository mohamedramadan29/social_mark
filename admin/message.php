<?php
ob_start();
$pagetitle = "Services-Reports";
session_start();
if (isset($_SESSION["admin"])) {
	include "init.php";?>
	<body class="car_page">
<?php
    $stmt = $connect->prepare("SELECT * FROM info ORDER BY info_id DESC");
    $stmt->execute();
    $count = $stmt->rowCount();
    $allserv = $stmt->fetchall();
    if ($count > 0) {?>
    		<div class="container report">
    			<h2 class="text-center"> الرسائل </h2>
    			<div class="table-responsive">
    				<table class="table table-bordered text-center">


    						<tr>
    							<th> الاسم </th>
                                <th>الجوال</th>
    							<th>البريد الالكترونى</th>
    							<th>الموضوع</th>
                                <th>الرسالة</th>
                                <th>تاريخ الرسالة</th>
                                <th> &nbsp; </th>
                                
    						</tr>
    						<?php 
    						foreach ($allserv as $serv) {?>
    							<tr> 
    							<td> <?php echo $serv["info_name"]; ?> </td>
    							<td> <?php echo $serv["info_mobile"]; ?> </td>
                                <td> <?php echo $serv["info_email"]; ?> </td>
                                <td> <?php echo $serv["info_store"]; ?> </td>
                                <td> <?php echo $serv["info_info"]; ?> </td>
                                    <td> <?php echo $serv["info_date"]; ?> </td>

    						</tr>
                           <?php
    						}}
    						?>
    						
    				
    				</table>
    			</div>
    		</div>
    	
   <?php
    

    }
     else{?>
    	<div class="container">
    		<h2 class="text-center"> No Message </h2>
    	</div>
    	<?php
    }

	include $tem . "footer.php";


ob_end_flush();
 ?>