 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-mortar-board"></i> Academics <small></small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">       
            <div class="col-md-4">           
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Teacher</h3>
                    </div> 
                    <form id="form1" action="https://demo.smart-school.in/admin/teacher/create"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8"  enctype="multipart/form-data">
                        <div class="box-body">
                                    
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="form-group">
                                <label for="exampleInputEmail1">Teacher Name</label>
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
                                <label for="exampleInputFile">Teacher Photo (150px X 150px)</label>
                                <input class="filestyle form-control" type="file" name="file" id="file" size="20" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle" style="display: inline-block;" tabindex="0"><input type="text" class="input-large" disabled=""> <label for="file" class="btn btn-default chosebtn"> <i class="icon-folder-open"></i> <span>Choose File</span></label></div>

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
                        <h3 class="box-title titlefix">Teacher List</h3>
                    </div>
                    <div class="box-body">
                        <div class="mailbox-controls">
                        </div>
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Teacher List</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th>Teacher Name</th>
                                        <th>Email</th>
                                        <th>Date Of Birth</th>
                                        <th>Phone</th>
                                        <th class="text-right no-print">Action                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>

                                            <td class="mailbox-name"> Peter Nest</td>
                                            <td class="mailbox-name"> peter@gmail.com</td>
                                            <td class="mailbox-name"> 08/02/1973</td>
                                            <td class="mailbox-name"> 657974644</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/1" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/1"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Jason Sharlton</td>
                                            <td class="mailbox-name"> jason@gmail.com</td>
                                            <td class="mailbox-name"> 13/09/1985</td>
                                            <td class="mailbox-name"> 956745415</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/2" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/2"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> William Abbot</td>
                                            <td class="mailbox-name"> william@gmail.com</td>
                                            <td class="mailbox-name"> 14/07/1986</td>
                                            <td class="mailbox-name"> 69864654456</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/3" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/3"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Mira Scott</td>
                                            <td class="mailbox-name"> mira@gmail.com</td>
                                            <td class="mailbox-name"> 06/09/1979</td>
                                            <td class="mailbox-name"> 9564644544</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/4" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/4"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Patrick Schultz</td>
                                            <td class="mailbox-name"> patrick@gmail.com</td>
                                            <td class="mailbox-name"> 13/08/1980</td>
                                            <td class="mailbox-name"> 9564646446</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/5" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/5"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Megan Fraser</td>
                                            <td class="mailbox-name"> megan@gmail.com</td>
                                            <td class="mailbox-name"> 15/07/1969</td>
                                            <td class="mailbox-name"> 9856546464</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/6"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> VALEX FABIANO VALENCIO</td>
                                            <td class="mailbox-name"> valex.valencio@gmail.com</td>
                                            <td class="mailbox-name"> 17/05/2017</td>
                                            <td class="mailbox-name"> 1w212</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/7" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/7" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/7"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> peter</td>
                                            <td class="mailbox-name"> peter@gmail.com</td>
                                            <td class="mailbox-name"> 25/03/1987</td>
                                            <td class="mailbox-name"> 994546485</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/8" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/8"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> demo teacher</td>
                                            <td class="mailbox-name"> demo@tec.com</td>
                                            <td class="mailbox-name"> 15/08/2017</td>
                                            <td class="mailbox-name"> demo</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/9" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/9" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/9"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Javier martinez mendieta</td>
                                            <td class="mailbox-name"> fjmme25@gmail.com</td>
                                            <td class="mailbox-name"> 13/07/2016</td>
                                            <td class="mailbox-name"> 4253124562</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/10" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/10" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/10"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Radhik</td>
                                            <td class="mailbox-name"> radhika@gmail.com</td>
                                            <td class="mailbox-name"> 13/09/2017</td>
                                            <td class="mailbox-name"> 8281331623</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/11" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/11" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/11"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> Brandon</td>
                                            <td class="mailbox-name"> brandon@gmail.com</td>
                                            <td class="mailbox-name"> 06/09/2017</td>
                                            <td class="mailbox-name"> 4492540971231111111</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/12" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/12" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/12"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                                <tr>

                                            <td class="mailbox-name"> ankesh</td>
                                            <td class="mailbox-name"> ankesh2@internetbusinesssolutionsindia.com</td>
                                            <td class="mailbox-name"> 14/09/2017</td>
                                            <td class="mailbox-name"> 09879879797</td>
                                            <td class="mailbox-date pull-right no-print">
                                                <a href="https://demo.smart-school.in/admin/teacher/view/13" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Show" >
                                                    <i class="fa fa-reorder"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/edit/13" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Edit">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="https://demo.smart-school.in/admin/teacher/delete/13"class="btn btn-default btn-xs"  data-toggle="tooltip" title="Delete" onclick="return confirm('Are you sure you want to delete this item?')";>
                                                    <i class="fa fa-remove"></i>
                                                </a>
                                            </td>
                                        </tr>
                                                                        </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="">
                        <div class="mailbox-controls">
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

 
 