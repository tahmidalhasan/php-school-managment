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
                        <h3 class="box-title">Add Item stock</h3>
                    </div><!-- /.box-header -->

                    <form id="form1" action="https://demo.smart-school.in/admin/itemstock"  id="itemstockform" name="itemstockform" method="post" accept-charset="utf-8" enctype="multipart/form-data">

                        <div class="box-body">
                                                                                    <input type='hidden' name='ci_csrf_token' value=''/>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Item Category</label>

                                <select autofocus="" id="item_category_id" name="item_category_id" class="form-control" >
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
                                <label for="exampleInputEmail1">Item</label>

                                <select  id="item_id" name="item_id" class="form-control" >
                                    <option value="">Select</option>

                                </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Supplier</label>

                                <select  id="supplier_id" name="supplier_id" class="form-control" >
                                    <option value="">Select</option>
                                                                            <option value="1">Camlin Stationers</option>

                                                                                <option value="2">Best Enterprises</option>

                                                                        </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Store</label>

                                <select  id="store_id" name="store_id" class="form-control" >
                                    <option value="">Select</option>
                                                                            <option value="1">Sports Store</option>

                                                                                <option value="2">Science Store</option>

                                                                                <option value="3">Library Store</option>

                                                                        </select>
                                <span class="text-danger"></span>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Quantity</label>
                                <div class="">
                                    <span class="miplus">
                                        <select class="form-control" name="symbol">
                                            <option value="+">+</option>
                                            <option value="-">-</option>
                                        </select>
                                    </span>
                                    <input id="quantity" name="quantity" placeholder="" type="text" class="form-control miplusinput"  value="" />
                                </div>

                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date</label>
                                <input id="date" name="date" placeholder="" type="text" class="form-control"  value="" readonly="readonly" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Attach Document</label>
                                <input id="item_photo" name="item_photo" placeholder="" type="file" class="filestyle form-control"  value="" />
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
                        <h3 class="box-title titlefix"> Item Stock List</h3>
                        <div class="box-tools pull-right">
                        </div><!-- /.box-tools -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Item Stock List</div>
                            <table class="table table-hover table-striped table-bordered example">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Supplier</th>
                                        <th>Store</th>
                                        <th>Quantity</th>
                                        <th>Date</th>
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
                                                    Best Enterprises
                                                </td>

                                                <td class="mailbox-name">
                                                    Sports Store
                                                </td>
                                                <td class="mailbox-name">
                                                    50
                                                </td>
                                                 <td class="mailbox-name">
                                                   06-12-2017
                                                </td>





                                                <td class="mailbox-date pull-right">
   <a href="https://demo.smart-school.in/admin/itemstock/download/uploads/inventory_items/1.jpg" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Download">
                                                        <i class="fa fa-download"></i>
                                                    </a>
                                                       
                                                    <a href="https://demo.smart-school.in/admin/itemstock/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/itemstock/delete/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
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

 
 