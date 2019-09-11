 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-book"></i>  Library        </h1>
    </section>  
    <section class="content">
        <div class="row">         
            <div class="col-md-3">
                
<div class="box box-primary">
    <div class="box-body box-profile">
        <img class="profile-user-img img-responsive img-circle" src="https://demo.smart-school.in/uploads/student_images/5.jpg" alt="User profile picture">
        <h3 class="profile-username text-center">Simon Peterson</h3>
        <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
                <b>Member Id</b> <a class="pull-right text-aqua">6</a>
            </li>
            <li class="list-group-item">
                <b>Library Card Number</b> <a class="pull-right text-aqua">LCN14</a>
            </li>
            <li class="list-group-item">
                <b>Admission Number</b> <a class="pull-right text-aqua">17005</a>
            </li>

            <li class="list-group-item">
                <b>Gender</b> <a class="pull-right text-aqua">Male</a>
            </li>

            <li class="list-group-item">
                <b>Member Type</b> <a class="pull-right text-aqua">Student</a>
            </li>
            <li class="list-group-item">
                <b>Mobile Number</b> <a class="pull-right text-aqua">5646546546</a>
            </li>

        </ul>
    </div>
</div>
       
            </div>
            <div class="col-md-9">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Issue Book</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <form id="form1" action="https://demo.smart-school.in/admin/member/issue/6"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8">

                        <div class="box-body">                            
                            
                            <input type='hidden' name='ci_csrf_token' value=''/>
                            <input id="member_id" name="member_id"  type="hidden" class="form-control date"  value="6" />

                            <div class="form-group">
                                <label for="exampleInputEmail1">Books</label>
                                <select  autofocus="" id="book_id" name="book_id" class="form-control" >
                                    <option value="">Select</option>
                                                                            <option value="1">Multiplication and Division Grades 3-4</option>
                                                                                        <option value="3">How to Homeschool 9th and 10th Grade: Simple Steps for Starting Strong</option>
                                                                                        <option value="4">First Grade Big Workbook!</option>
                                                                                        <option value="5">Feast Your Eyes</option>
                                                                                        <option value="6">My Weird School Daze 12-Book Box Set: Books 1-12</option>
                                                                                        <option value="7">My Weird School Special: It's Halloween, I'm Turning Green!</option>
                                                                                        <option value="8">Let Us C</option>
                                                                                </select>
                                <span class="text-danger"></span>
                            </div>
                            <div class="form-group">
                                <label>Return Date</label>
                                <input id="dateto" name="return_date"  type="text" class="form-control date"  value="08/04/2018" />
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right">Save</button>
                        </div>
                    </form>
                </div> 
                <div class="box box-primary">
                    <div class="box-header ptbnull">
                        <h3 class="box-title titlefix">Book Issued</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->

                    <div class="box-body">                            
                        <div class="table-responsive mailbox-messages">
						<div class="download_label">Book Issued</div>
                            <table class="table table-striped table-bordered table-hover example">
                                <thead>
                                    <tr>

                                        <th>Book Title</th>
                                        <th>Book Number</th>
                                        <th>Issue Date</th>
                                        <th>Return Date</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td class="mailbox-name">
                                                    My Weird School Special: It's Halloween, I'm Turning Green!                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    17/01/2018</td>
                                                <td class="mailbox-name">
                                                    17/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                            <a href="https://demo.smart-school.in/admin/member/bookreturn/37/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Return" onclick="return confirm('Are you sure you want to return this book?')">
                                                            <i class="fa fa-mail-reply"></i>
                                                        </a>

                                                                                                        </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                            <a href="https://demo.smart-school.in/admin/member/bookreturn/45/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Return" onclick="return confirm('Are you sure you want to return this book?')">
                                                            <i class="fa fa-mail-reply"></i>
                                                        </a>

                                                                                                        </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    23/01/2018</td>
                                                <td class="mailbox-name">
                                                    23/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                            <a href="https://demo.smart-school.in/admin/member/bookreturn/48/6" class="btn btn-default btn-xs"  data-toggle="tooltip" title="Return" onclick="return confirm('Are you sure you want to return this book?')">
                                                            <i class="fa fa-mail-reply"></i>
                                                        </a>

                                                                                                        </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    How to Homeschool 9th and 10th Grade: Simple Steps for Starting Strong                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    29/09/2017</td>
                                                <td class="mailbox-name">
                                                    06/10/2017</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    How to Homeschool 9th and 10th Grade: Simple Steps for Starting Strong                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    31/10/2017</td>
                                                <td class="mailbox-name">
                                                    31/10/2017</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    My Weird School Daze 12-Book Box Set: Books 1-12                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    31/10/2017</td>
                                                <td class="mailbox-name">
                                                    31/10/2017</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Feast Your Eyes                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    01/12/2017</td>
                                                <td class="mailbox-name">
                                                    07/12/2017</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    10/01/2018</td>
                                                <td class="mailbox-name">
                                                    10/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    11/01/2018</td>
                                                <td class="mailbox-name">
                                                    11/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    17/01/2018</td>
                                                <td class="mailbox-name">
                                                    17/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Multiplication and Division Grades 3-4                                                </td>
                                                <td class="mailbox-name">
                                                                                                    </td>
                                                <td class="mailbox-name">
                                                    18/01/2018</td>
                                                <td class="mailbox-name">
                                                    18/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Let Us C                                                </td>
                                                <td class="mailbox-name">
                                                    101                                                </td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                                                                        <tr>
                                                <td class="mailbox-name">
                                                    Let Us C                                                </td>
                                                <td class="mailbox-name">
                                                    101                                                </td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-name">
                                                    20/01/2018</td>
                                                <td class="mailbox-date pull-right">
                                                                                                    </td>
                                            </tr>
                                            
                                </tbody>
                            </table><!-- /.table -->
                        </div><!-- /.mail-box-messages -->

                    </div><!-- /.box-body -->

                    </form>
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

 
 