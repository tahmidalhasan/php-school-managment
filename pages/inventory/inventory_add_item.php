 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-object-group"></i> Inventory</h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Item</h3>
                    </div><!-- /.box-header -->
                    <form id="form1" action="https://demo.smart-school.in/admin/item"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" >
                        <div class="box-body">
                                                                                    <input type='hidden' name='ci_csrf_token' value=''/>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Item</label>
                                <input autofocus="" id="name" name="name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
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

                            <div class="form-group">
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
            <!-- left column -->
            <div class="col-md-8">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix"> Item List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Item List</div>
                            <table class="table table-hover table-striped table-bordered example">
                                <thead>
                                    <tr>
                                        <th>Item</th>                                 
                                        <th>Category                                        </th>
                                        <th>Available Quantity                                        </th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>


                                                <td class="mailbox-name">
                                                    Sports
                                                </td>
                                                <td class="mailbox-name">
                                                    60
                                                </td>




                                                <td class="mailbox-date pull-right"">

                                                    <a href="https://demo.smart-school.in/admin/item/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/item/delete/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">test item</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">test desc</p>
                                                                                                                </div>
                                                </td>


                                                <td class="mailbox-name">
                                                    Sports
                                                </td>
                                                <td class="mailbox-name">
                                                    3
                                                </td>




                                                <td class="mailbox-date pull-right"">

                                                    <a href="https://demo.smart-school.in/admin/item/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/item/delete/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Desk-Bench Pair</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-danger">No Description</p>
                                                                                                                </div>
                                                </td>


                                                <td class="mailbox-name">
                                                    Furniture
                                                </td>
                                                <td class="mailbox-name">
                                                    0
                                                </td>




                                                <td class="mailbox-date pull-right"">

                                                    <a href="https://demo.smart-school.in/admin/item/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/item/delete/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                </tbody>
                            </table><!-- /.table -->



                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (left) -->
            <!-- right column -->

        </div>
        <div class="row">
            <!-- left column -->

            <!-- right column -->
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

 
 