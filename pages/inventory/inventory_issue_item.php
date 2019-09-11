 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-object-group"></i> Inventory        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Issue Item</h3>
                        <div class="box-tools pull-right">

                            <a href="inventory_issue_item_add.php" type="button" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i> Issue Item</a>
                        </div>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Issue Item</div>
                            <table class="table table-hover table-striped table-bordered example">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Item Category</th>
                                        <th>Issue - Return</th>
                                        <th>Issue To</th>
                                        <th>Issued By</th>
                                        <th>Quantity</th>
                                        <th>Status</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">some note here</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                    Sports                                                </td>


                                                <td class="mailbox-name">
                                                    07-12-2017 - 09-01-2018                                                </td>
                                                <td class="mailbox-name">
                                                    Peter Nest (Teacher)                                                </td>
                                                <td class="mailbox-name">Accountant</td>
                                                <td class="mailbox-name">10</td>
                                                <td class="mailbox-name">
                                                        <span class="label label-success">Returned</span>

                                                        </td>

                                                <td class="mailbox-date pull-right"">


                                                    <a href="https://demo.smart-school.in/admin/issueitem/delete/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">a</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                    Sports                                                </td>


                                                <td class="mailbox-name">
                                                    01-01-2018 - 09-01-2018                                                </td>
                                                <td class="mailbox-name">
                                                    Admin (Admin)                                                </td>
                                                <td class="mailbox-name">a</td>
                                                <td class="mailbox-name">1</td>
                                                <td class="mailbox-name">
                                                        <span class="label label-success">Returned</span>

                                                        </td>

                                                <td class="mailbox-date pull-right"">


                                                    <a href="https://demo.smart-school.in/admin/issueitem/delete/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">a</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                    Sports                                                </td>


                                                <td class="mailbox-name">
                                                    01-01-2018 - 09-01-2018                                                </td>
                                                <td class="mailbox-name">
                                                    James Deckar (Accountant)                                                </td>
                                                <td class="mailbox-name">a</td>
                                                <td class="mailbox-name">1</td>
                                                <td class="mailbox-name">
                                                        <span class="label label-success">Returned</span>

                                                        </td>

                                                <td class="mailbox-date pull-right"">


                                                    <a href="https://demo.smart-school.in/admin/issueitem/delete/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">test</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                    Sports                                                </td>


                                                <td class="mailbox-name">
                                                    09-01-2018 - 10-01-2018                                                </td>
                                                <td class="mailbox-name">
                                                    William Abbot (Teacher)                                                </td>
                                                <td class="mailbox-name">Adm</td>
                                                <td class="mailbox-name">22</td>
                                                <td class="mailbox-name">
                                                        <span class="label label-success">Returned</span>

                                                        </td>

                                                <td class="mailbox-date pull-right"">


                                                    <a href="https://demo.smart-school.in/admin/issueitem/delete/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    <a href="#" data-toggle="popover" class="detail_popover">Cricket Bat</a>

                                                    <div class="fee_detail_popover" style="display: none">
                                                                                                                    <p class="text text-info">jljkkj</p>
                                                                                                                </div>
                                                </td>
                                                <td class="mailbox-name">
                                                    Sports                                                </td>


                                                <td class="mailbox-name">
                                                    03-01-2018 - 16-01-2018                                                </td>
                                                <td class="mailbox-name">
                                                    Admin (Admin)                                                </td>
                                                <td class="mailbox-name">kumar</td>
                                                <td class="mailbox-name">3</td>
                                                <td class="mailbox-name">
                                                        <span class="label label-success">Returned</span>

                                                        </td>

                                                <td class="mailbox-date pull-right"">


                                                    <a href="https://demo.smart-school.in/admin/issueitem/delete/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?');">
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->
                    </div><!-- /.box-body -->
                </div>
            </div><!--/.col (right) -->
        </div>

    </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 