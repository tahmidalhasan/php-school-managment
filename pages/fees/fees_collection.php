 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
		<section class="content-header">
			<h1><i class="fa fa-money"></i> Fees Collection<small></small></h1>
		</section>

		
	   <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
			<?php
				
				if(isset($_GET['collect_fees'])){
					
					$collect_id=$_GET['collect_fees'];
					
					$obj=new shop();

					$q="SELECT * FROM students_info WHERE id='$collect_id'";
					$read=$obj->selectDataFetch($q);
					if($result=$read->fetch_array())
					{
											
					
				?>
			
			
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-4">
                                <h3 class="box-title">Student Fees</h3>
                            </div>  
                            <div class="col-md-8 ">
                                <div class="btn-group pull-right">
                                    <a href="fees_collection_search.php" type="button" class="btn btn-primary btn-xs">
                                        <i class="fa fa-arrow-left"></i> </a>
                                </div>
                            </div>
                        </div>  
                    </div><!--./box-header-->    
                    <div class="box-body" style="padding-top:0;">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="sfborder">  
                                    <div class="col-md-2">
									<?php
									if($result['image']==""){
									?>
									<img width="115" height="115" class="round5" src="img/no_image.png" alt="No Image">
										<?php
									}else{
										?>
										 <img width="115" height="115" class="round5" src="upload/<?php echo $result['first_name']?>" alt="No Image">
										<?php
									}
										?>
                                    </div>

                                    <div class="col-md-10">
                                        <div class="row">
                                            <table class="table table-striped mb0 font13">
											
                                                <tbody>
                                                    <tr>
                                                        <th class="bozero">Name</th>
                                                        <td class="bozero"><?php echo $result['first_name']?> <?php echo $result['last_name']?></td>

                                                        <th class="bozero">Class Section</th>
                                                        <td class="bozero"><?php echo $result['class']?> (<?php echo $result['section']?>) </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Father Name</th>
                                                        <td><?php echo $result['father_name']?></td>
                                                        <th>Admission Number</th>
                                                        <td><?php echo $result['admission_number']?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Mobile Number</th>
                                                        <td><?php echo $result['mobile_no']?></td>
                                                        <th>Roll Number</th>
                                                        <td> <?php echo $result['roll_number']?>  </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Category</th>
                                                        <td> <?php echo $result['category']?>  </td>
                                                        <th>RTE</th>
                                                        <td><b class="text-danger"> <?php echo $result['rte']?> </b>
                                                        </td>
                                                    </tr>

                                                </tbody>
												
												
                                            </table>
                                        </div>
                                    </div>


                                </div></div>
                            <div class="col-md-12">
                                <div style="background: #dadada; height: 1px; width: 100%; clear: both; margin-bottom: 10px;"></div>
                             </div>
                        </div>
                        <div class="row no-print">
                            <div class="col-xs-12 table-responsive">
                                
                                <span class="pull-right"><?php echo date('d/m/Y');?></span>
                            </div>
                        </div>   
                        <div class="table-responsive">


                            <!--//=========================-->
       <div class="download_label">Student Fees: educlap abc </div>
                            <table class="table table-striped table-bordered table-hover example table-fixed-header">
                                <thead class="header">
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th align="left">Fees Group</th>
                                        <th align="left">Fees Code</th>
                                        <th align="left" class="text text-left">Due Date</th>
                                        <th align="left" class="text text-left">Status</th>
                                        <th class="text text-right">Amount <span>($)</span></th>
                                        <th class="text text-left">Payment Id</th>
                                        <th class="text text-left">Mode</th>
                                        <th  class="text text-left">Date</th>
                                        <th class="text text-right" >Discount <span>($)</span></th>
                                        <th class="text text-right">Fine <span>($)</span></th>
                                        <th class="text text-right">Paid <span>($)</span></th>
                                        <th class="text text-right">Balance <span>($)</span></th>
                                        <th class="text text-right">Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                                                        

                                    <tr class="box box-solid total-bg">
                                        <td align="left" ></td>
                                        <td align="left" ></td>
                                        <td align="left" ></td>
                                        <td align="left" ></td>
                                        <td align="left" class="text text-left" >Grand Total</td>
                                        <td class="text text-right">$0.00</td>
                                        <td class="text text-left"></td>
                                        <td class="text text-left"></td>
                                        <td class="text text-left"></td>

                                        <td class="text text-right">$0.00</td>
                                        <td class="text text-right">$0.00</td>
                                        <td class="text text-right">$0.00</td>
                                        <td class="text text-right">$0.00</td>  <td class="text text-right"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
				
				
				<?php
				}
				}
				?>
				
				


            </div>
            <!--/.col (left) -->

        </div>

    </section>

</div>


<div class="modal fade" id="myFeesModal" role="dialog">
    <div class="modal-dialog">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title text-center fees_title"></h4>
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input  type="hidden" class="form-control" id="guardian_phone" value="98654646" readonly="readonly"/>
                        <input  type="hidden" class="form-control" id="guardian_email" value="" readonly="readonly"/>
                        <input  type="hidden" class="form-control" id="student_fees_master_id" value="0" readonly="readonly"/>
                        <input  type="hidden" class="form-control" id="fee_groups_feetype_id" value="0" readonly="readonly"/>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-9">
                                <input  id="date" name="admission_date" placeholder="" type="text" class="form-control date"  value="02/04/2018" readonly="readonly"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Amount </label>
                            <div class="col-sm-9">

                                <input type="text" autofocus="" class="form-control modal_amount" id="amount" value="0"  >

                                <span class="text-danger" id="amount_error"></span>
                            </div>
                        </div>

                        <div class="form-group mb0">
                            <label for="inputPassword3" class="col-sm-3 control-label">Discount</label>
                            <div class="col-sm-9">

                                <div class="col-md-5 col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="amount_discount" value="0">

                                        <span class="text-danger" id="amount_error"></span></div>
                                </div> 
                                <div class="col-md-2 col-sm-2 ltextright">

                                    <label for="inputPassword3" class="row control-label">Fine</label>
                                </div>
                                <div class="col-md-5 col-sm-5">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="amount_fine" value="0">

                                        <span class="text-danger" id="amount_fine_error"></span>
                                    </div>
                                </div>   

                            </div><!--./col-sm-9-->
                        </div>




                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Payment Mode</label>
                            <div class="col-sm-9">
                                <label class="radio-inline">
                                    <input type="radio" name="payment_mode_fee" value="Cash" checked="checked">Cash                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="payment_mode_fee" value="Cheque">Cheque                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="payment_mode_fee" value="DD">DD                                </label>
                                <span class="text-danger" id="payment_mode_error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Note</label>

                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" id="description" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="modal-footer">
                <div class="box-body">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn cfees save_button" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> $ Collect Fees </button>
                </div>
            </div>
        </div>

    </div>
</div>



<div class="modal fade" id="myDisApplyModal" role="dialog">
    <div class="modal-dialog">      
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title text-center discount_title"></h4>
            </div>
            <div class="modal-body pb0">
                <div class="form-horizontal">
                    <div class="box-body">
                        <input  type="hidden" class="form-control" id="student_fees_discount_id"  value=""/>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Payment Id </label>
                            <div class="col-sm-9">

                                <input type="text" class="form-control" id="discount_payment_id" >

                                <span class="text-danger" id="discount_payment_id_error"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Description</label>

                            <div class="col-sm-9">
                                <textarea class="form-control" rows="3" id="dis_description" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>
            <div class="modal-footer">
                <div class="box-body">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn cfees dis_apply_button" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"> Apply Discount</button>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="delmodal modal fade" id="confirm-discountdelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">

                <p>Are you sure want to revert <b class="discount_title"></b> discount, this action is irreversible.</p>
                <p>Do you want to proceed?</p>
                <p class="debug-url"></p>
                <input type="hidden" name="discount_id"  id="discount_id" value="">

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-discountdel">Revert</a>
            </div>
        </div>
    </div>
</div>


<div class="delmodal modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
            </div>

            <div class="modal-body">

                <p>Are you sure want to delete <b class="invoice_no"></b> invoice, this action is irreversible.</p>
                <p>Do you want to proceed?</p>
                <p class="debug-url"></p>
                <input type="hidden" name="main_invoice"  id="main_invoice" value="">
                <input type="hidden" name="sub_invoice" id="sub_invoice"  value="">
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Revert</a>
            </div>
        </div>
    </div>
</div>


	
		
		
		
		
		
		
  </div>
  <!-- /.content-wrapper -->

 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 