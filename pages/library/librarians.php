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
            <div class="col-md-4">           
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Librarian</h3>
                    </div> 
                    <form id="form1" action=""  id="employeeform" name="employeeform" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                        <div class="box-body">
                                    
                            <input type='hidden' name='ci_csrf_token' value=''/>  

							<div class="form-group">
                                <label for="exampleInputEmail1">Name</label>
                                <input autofocus="" id="category" name="name" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="category" name="email" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile"> Gender &nbsp;&nbsp;</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select</option>
                                                                            <option value="Male" >Male</option>
                                                                                <option value="Female" >Female</option>
                                                                        </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Date Of Birth</label>
                                <input id="dob" name="dob" placeholder="" type="text" class="form-control"  value="" readonly="readonly"/>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <textarea id="address" name="address" placeholder=""  class="form-control" ></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input id="phone" name="phone" placeholder="" type="text" class="form-control"  value="" />
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Librarian Photo (150px X 150px)</label>
                                <input class="filestyle form-control" type='file' name='file' id="file" size='20' />

                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div>   
            </div>  
            <div class="col-md-8">              
                <div class="box box-primary" id="tachelist">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Librarian List</h3>

                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">
                        </div>
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Librarian List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>                                        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th class="text-right no-print">Action                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>

                                                <td class="mailbox-name"> Maria Ford</td>
                                                <td class="mailbox-name"> maria.ford@gmail.com</td>
                                                <td class="mailbox-name"> 14/08/1985</td>
                                                <td class="mailbox-name"> 4589734832</td>
                                                <td class="mailbox-date pull-right no-print">

                                                    <a href="librarian_show.php" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show">
                                                        <i class="fa fa-list"></i>
                                                    </a>
                                                    <a href="" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href=""class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>

                                                <td class="mailbox-name"> 1</td>
                                                <td class="mailbox-name"> home3@trashcanmail.com</td>
                                                <td class="mailbox-name"> 08/08/2017</td>
                                                <td class="mailbox-name"> asda</td>
                                                <td class="mailbox-date pull-right no-print">

                                                    <a href="https://demo.smart-school.in/admin/librarian/view/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show">
                                                        <i class="fa fa-list"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/librarian/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/librarian/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                                        <tr>

                                                <td class="mailbox-name"> kumar</td>
                                                <td class="mailbox-name"> kumar@gmail.com</td>
                                                <td class="mailbox-name"> 04/12/2017</td>
                                                <td class="mailbox-name"> +917708576426</td>
                                                <td class="mailbox-date pull-right no-print">

                                                    <a href="https://demo.smart-school.in/admin/librarian/view/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show">
                                                        <i class="fa fa-list"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/librarian/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </a>
                                                    <a href="https://demo.smart-school.in/admin/librarian/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                        <i class="fa fa-remove"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                                                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>



</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 