 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		<section class="content-header">
        <h1><i class="fa fa-building-o"></i> Inventory</h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Issue Item</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form  action="https://demo.smart-school.in/admin/issueitem/add"  id="issueitem" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <div class="row">
                                                                      
                                <input type='hidden' name='ci_csrf_token' value=''/>                     
                                <div class="form-group col-md-4 col-sm-12">

                                    <label for="input-type">User Type</label>
                                    <div id="input-type" class="row">
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="radio-inline">
                                                <input autofocus="" name="account_type" class="ac_type" id="input-type-student" value="teacher" type="radio" />Teacher                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="radio-inline">
                                                <input  name="account_type" class="ac_type" id="input-type-student" value="librarian" type="radio" />Librarian                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="radio-inline">
                                                <input name="account_type" class="ac_type" id="input-type-student" value="accountant" type="radio" />Accountant                                            </label>
                                        </div>
                                        <div class="col-md-3 col-sm-3 col-xs-6">
                                            <label class="radio-inline">
                                                <input name="account_type" class="ac_type" id="input-type-tutor" value="admin" type="radio" />Admin                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="exampleInputEmail1">Issue To</label>

                                    <select  id="issue_to" name="issue_to" class="form-control">
                                        <option value="">Select</option>
                                    </select>
                                    <span class="text-danger"></span>

                                </div>
                                <!-- <div class="clearfix"></div> -->
                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="exampleInputEmail1">Issue By</label>
                                    <input id="issue_by" name="issue_by" placeholder="" type="text" class="form-control"  value="" />
                                    <span class="text-danger"></span>

                                </div>



                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="exampleInputEmail1">Issue Date</label>
                                    <input id="issue_date" name="issue_date" placeholder="" type="text" class="form-control date"  value="" readonly />
                                    <span class="text-danger"></span>
                                </div>
                                <!-- <div class="clearfix"></div> -->
                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="exampleInputEmail1">Return Date</label>
                                    <input id="return_date" name="return_date" placeholder="" type="text" class="form-control date"  value="" readonly/>
                                    <span class="text-danger"></span>
                                </div>

                                <div class="form-group col-md-4 col-sm-4">
                                    <label for="exampleInputEmail1">Note</label>
                                    <textarea name="note" class="form-control" id="note"/></textarea>
                                    <span class="text-danger"></span>
                                </div>
                                <div class="clearfix"></div>



                                <hr>

                                <div class="col-md-12">
                                    <div class="row">



                                        <div class="form-group col-sm-4">
                                            <label for="exampleInputEmail1">Item Category</label>

                                            <select  id="item_category_id" name="item_category_id" class="form-control" >
                                                <option value="">Select</option>
                                                                                                    <option value="1">Sports</option>

                                                                                                        <option value="2">Science</option>

                                                                                                        <option value="3">Student Uniform</option>

                                                                                                        <option value="4">Staff Dress</option>

                                                                                                        <option value="5">Chairs</option>

                                                                                                        <option value="6">Pen</option>

                                                                                                        <option value="7">Furniture</option>

                                                                                                </select>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="exampleInputEmail1">Item</label>

                                            <select  id="item_id" name="item_id" class="form-control" >
                                                <option value="">Select</option>

                                            </select>
                                            <span class="text-danger"></span>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Quantity</label>
                                            <input  class="form-control" name="quantity"/>
                                            <div id="div_avail">
                                                <span>Available Quantity : </span>
                                                <span id="item_available_quantity">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 



                            </div>       
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                            <button type="submit" class="allot-fees btn btn-primary btn-sm pull-right" id="load" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait..">Submit                            </button>
                        </div>
                    </form>
                </div>

            </div><!--/.col (right) -->
        </div>
        <div class="row">
            <div class="col-md-12">
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section>
  


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 