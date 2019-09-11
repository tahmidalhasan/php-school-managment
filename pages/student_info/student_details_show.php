 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
 
 <?php
 
				if(isset($_GET['show_id'])){
				
					$show_id=$_GET['show_id'];
				
					$q="SELECT * FROM students_info WHERE id=$show_id";
					
					$read=$obj->selectDataFetch($q);
					
					if($result=$read->fetch_array()){
							  
				$student_image=$result['image'];
 ?>
		
    <section class="content">
        <div class="row">
            <div class="col-md-3">                
                <div class="box box-primary">
                    <div class="box-body box-profile">
					
					<?php
					if($student_image==""){
					?>
					
                        <img class="profile-user-img img-responsive img-circle" src="img/no_image.png" alt="User profile picture">
						<?php
					}else{
						
						?>
						  <img class="profile-user-img img-responsive img-circle" src="upload/<?php echo$result['image']?> " alt="User profile picture">
						<?php
					}
						?>
						
                        <h3 class="profile-username text-center"><?php echo$result['first_name']?> <?php echo$result['last_name']?></h3>
                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Admission ID</b> <a class="pull-right text-aqua"><?php echo$result['admission_number']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Roll Number</b> <a class="pull-right text-aqua"><?php echo$result['roll_number']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Class</b> <a class="pull-right text-aqua"><?php echo$result['class']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Section</b> <a class="pull-right text-aqua"><?php echo$result['section']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>RTE</b> <a class="pull-right text-aqua"><?php echo$result['rte']?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Gender</b> <a class="pull-right text-aqua"><?php echo$result['gender']?></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Profile</a></li>
                        <li class=""><a href="#fee" data-toggle="tab" aria-expanded="true">Fees</a></li>
                        <li class=""><a href="#exam" data-toggle="tab" aria-expanded="true">Exam</a></li>
                        <li class=""><a href="#documents" data-toggle="tab" aria-expanded="true">Documents</a></li>
                        <li class="pull-right"><a href="https://demo.smart-school.in/student/delete/43" class="text-red" onclick="return confirm('Are you sure you want to delete this Student? All related data can not be recovered!');"><i class="fa fa-trash"></i> Delete Student</a></li>
                        <li class="pull-right">
                            <a href="#"  class="schedule_modal text-green" data-toggle="tooltip" title=""><i class="fa fa-key"></i>
                                Login Details                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <div class="tshadow mb25 bozero">
                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>  
                                            <tr>
                                                <td class="col-md-4">Admission Date</td>
                                                <td class="col-md-5"><?php echo$result['admission_date']?></td>
                                            </tr>
                                            <tr>
                                                <td>Date Of Birth</td>
                                                <td><?php echo$result['dob']?></td>
                                            </tr>
                                            <tr>
                                                <td>Category</td>
                                                <td><?php echo$result['category']?></td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number</td>
                                                <td><?php echo$result['mobile_no']?></td>
                                            </tr>
                                            <tr>
                                                <td>Cast</td>
                                                <td><?php echo$result['cast']?></td>
                                            </tr>
                                            <tr>
                                                <td>Religion</td>
                                                <td><?php echo$result['religion']?></td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td><?php echo$result['email']?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div> 
                            </div> 
                            <div class="tshadow mb25 bozero">   
                                <h3 class="pagetitleh2">Address </h3>
                                <div class="table-responsive around10 pt0">  
                                    <table class="table table-hover table-striped tmb0"><tbody>
                                            <tr>
                                                <td>Current Address</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Permanent Address</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                            <div class="tshadow mb25 bozero">      
                                <h3 class="pagetitleh2">Parent / Guardian Details </h3>
                                <div class="table-responsive around10 pt10">
                                    <table class="table table-hover table-striped tmb0">
                                        <tr>
                                            <td  class="col-md-4">Father Name</td>
                                            <td  class="col-md-5"><?php echo$result['father_name']?></td>
                                        </tr>
                                        <tr>
                                            <td>Father Phone</td>
                                            <td><?php echo$result['father_phone']?></td>
                                        </tr>
                                        <tr>
                                            <td>Father Occupation</td>
                                            <td><?php echo$result['father_occup']?></td>
                                        </tr>
                                        <tr>
                                            <td>Mother Name</td>
                                            <td><?php echo$result['mother_name']?></td>
                                        </tr>
                                        <tr>
                                            <td>Mother Phone</td>
                                            <td><?php echo$result['mother_phone']?></td>
                                        </tr>
                                        <tr>
                                            <td>Mother Occupation</td>
                                            <td><?php echo$result['mother_occup']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Name</td>
                                            <td><?php echo$result['guardian_name']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Email</td>
                                            <td><?php echo$result['guardian_email']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Relation</td>
                                            <td><?php echo$result['guardian_relation']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Phone</td>
                                            <td><?php echo$result['guardian_phone']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Occupation</td>
                                            <td><?php echo$result['guardian_occup']?></td>
                                        </tr>
                                        <tr>
                                            <td>Guardian Address</td>
                                            <td><?php echo$result['guardian_address']?></td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div> 
                            <div class="tshadow mb25  bozero">    
                                <h3 class="pagetitleh2">Miscellaneous Details</h3>
                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0">
                                        <tbody>
                                            <tr>
                                                <td  class="col-md-4">Previous School Details</td>
                                                <td  class="col-md-5"></td>
                                            </tr>
                                            <tr>
                                                <td  class="col-md-4">National Identification Number</td>
                                                <td  class="col-md-5"></td>
                                            </tr>
                                            <tr>
                                                <td>Local Identification Number</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Bank Account Number</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Bank Name</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>IFSC Code</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div>
                        <div class="tab-pane" id="fee">
                        <div class="alert bg-info text-danger text-center">
                                    No Record Found                                </div>
                                
                        </div>                       
                        <div class="tab-pane" id="documents">
                            <div class="timeline-header no-border">
                                <button type="button"  data-student-session-id="94" class="btn btn-xs btn-primary pull-right myTransportFeeBtn"> <i class="fa fa-upload"></i>  Upload Documents</button>

                                <!-- <h2 class="page-header"> </h2> -->
                                <div class="table-responsive" style="clear: both;">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Title                                                </th>
                                                <th>
                                                     Name                                                </th>
                                                <th class="mailbox-date text-right">
                                                    Action                                                </th>
                                            </tr>
                                        </thead>
                                        <div class="row">                                     
                                            <tbody>
                                                                                                    <tr>
                                                        <td colspan="5" class="text-danger text-center">No Record Found</td>
                                                    </tr>
                                                                                                </tbody>
                                    </table>
                                </div>  
                            </div>
                            </table>
                        </div>                      
                        <div class="tab-pane" id="exam">
                            <div class=""> 
                                <h4 class="pagetitleh">Unit Test - April</h4>
                                <div class="alert alert-info">No Result Prepared</div>
                             <h4 class="pagetitleh">Unit Test - September</h4>
                              <div class="alert alert-info">No Result Prepared</div>
								<h4 class="pagetitleh">Test smart ng</h4>
								<div class="alert alert-info">No Result Prepared</div>
                           </div>                      
                        </div>
						</div>
                </div>
            </div>
            </div>
            </div>
    </section>
				<?php
				 }
				 }
				?>
  </div>
  <!-- /.content-wrapper -->
<script type="text/javascript">
    $(".myTransportFeeBtn").click(function () {
        $("span[id$='_error']").html("");
        $('#transport_amount').val("");
        $('#transport_amount_discount').val("0");
        $('#transport_amount_fine').val("0");
        var student_session_id = $(this).data("student-session-id");
        $('.transport_fees_title').html("<b>Upload Document</b>");
        $('#transport_student_session_id').val(student_session_id);
        $('#myTransportFeesModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true

        });
    });
</script>
 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 