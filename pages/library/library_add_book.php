 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
 <section class="content-header">
        <h1>
            <i class="fa fa-book"></i> Library </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Book</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form id="form1" action="https://demo.smart-school.in/admin/book/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">
                        <div class="box-body">
                                                              
                            <input type='hidden' name='ci_csrf_token' value=''/>                     
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book Title</label>
                                <input autofocus=""  id="book_title" name="book_title" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book Number</label>
                                <input id="book_no" name="book_no" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">ISBN Number</label>
                                <input id="isbn_no" name="isbn_no" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Publisher</label>
                                <input id="publish" name="publish" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Author</label>
                                <input id="author" name="author" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Subject</label>
                                <input id="subject" name="subject" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Rack Number</label>
                                <input id="rack_no" name="rack_no" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Qty</label>
                                <input id="qty" name="qty" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Book Price</label>
                                <input id="perunitcost" name="perunitcost" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Post Date</label>
                                <input id="postdate" name="postdate"  placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-md-6">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea class="form-control" id="description" name="description" placeholder="" rows="3" placeholder="Enter ..."></textarea>
                                <span class="text-danger"></span>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">

                            <button type="submit" class="btn btn-info pull-right">Save</button>
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

 
 