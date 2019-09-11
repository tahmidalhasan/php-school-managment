 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <?php
  
  $q2=mysqli_query($connect,"SELECT * FROM admin_log");
	while($result=mysqli_fetch_array($q2)){
		echo$result['username'];
		
	}
  ?>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 