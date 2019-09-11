 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">

<section class="content-header">
        <h1>
            <i class="fa fa-money"></i> Fees Collection 
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">          
            <div class="col-md-4">  
			<?php
			
			if(isset($_GET['show_id'])){
				
				$show_id=$_GET['show_id'];
				
				
					$obj=new shop();
					
					$q="SELECT * FROM accountant WHERE id='$show_id'";
					$read=$obj->selectDataFetch($q);
					if($result=$read->fetch_array())
					{
				
			?>
			   <div class="box box-primary">
                    <div class="box-body box-profile">
					<?php
					if($result['image']==""){
					?>
                        <img class="profile-user-img img-responsive img-circle" src="img/no_image.png" alt="User profile picture">
						<?php
					}else{
					
						?>
						 <img class="profile-user-img img-responsive img-circle" src="upload/<?php echo $result['image']?>" alt="User profile picture">
						<?php
					}
						?>
                        <h3 class="profile-username text-center"><?php echo $result['accountant_name']?><br/>
                            <small>
                                <a href="#"  class="schedule_modal text-green" data-toggle="tooltip" title=""><i class="fa fa-key"></i>
                                    Login Details   </a>
							</small>
                        </h3>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right text-aqua"><?php echo $result['gender']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Date Of Birth</b> <a class="pull-right text-aqua"><?php echo $result['dob']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="pull-right text-aqua"><?php echo $result['accountant_phone']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right text-aqua"><?php echo $result['accountant_email']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Address</b> <a class="pull-right text-aqua"><?php echo $result['address']?></a>
                            </li>
                        </ul>
                    </div>
                </div>
				
				<?php
				}
			}
				?>
            </div>

        </div> 
    </section>

</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>