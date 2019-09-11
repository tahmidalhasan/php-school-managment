
<!DOCTYPE html>
<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mount Carmel School</title>       
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="theme-color" content="#424242" />
        <link href="https://demo.smart-school.in/backend/images/s-favican.png" rel="shortcut icon" type="image/x-icon">
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/bootstrap/css/bootstrap.min.css">    
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/css/style-main.css"> 
            <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/themes/default/skins/_all-skins.min.css">
    <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/themes/default/ss-main.css">
                    <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/css/font-awesome.min.css">      
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/css/ionicons.min.css">       

        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/iCheck/flat/blue.css">      
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/morris/morris.css">       
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/jvectormap/jquery-jvectormap-1.2.2.css">        
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/datepicker/datepicker3.css">       
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/daterangepicker/daterangepicker-bs3.css">      
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

        <link rel="stylesheet" href="https://demo.smart-school.in/backend/dist/css/custom_style.css">
        <link rel="stylesheet" href="https://demo.smart-school.in/backend/datepicker/css/bootstrap-datetimepicker.css">
        <!--print table-->
        <link href="https://demo.smart-school.in/backend/dist/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
        <link href="https://demo.smart-school.in/backend/dist/datatables/css/buttons.dataTables.min.css" rel="stylesheet">
        <link href="https://demo.smart-school.in/backend/dist/datatables/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <script src="https://demo.smart-school.in/backend/custom/jquery.min.js"></script>
        <script src="https://demo.smart-school.in/backend/dist/js/moment.min.js"></script>
        <script src="https://demo.smart-school.in/backend/datepicker/js/bootstrap-datetimepicker.js"></script>
        <script src="https://demo.smart-school.in/backend/datepicker/date.js"></script>       
        <script src="https://demo.smart-school.in/backend/dist/js/jquery-ui.min.js"></script>
        <script src="https://demo.smart-school.in/backend/js/school-custom.js"></script>
        <script type="text/javascript">
            var baseurl = "https://demo.smart-school.in/";

        </script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and me/
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

    </head>
    <body class="hold-transition skin-blue fixed sidebar-mini">
        <div class="wrapper">
            <header class="main-header" id="alert">            
                <a href="https://demo.smart-school.in/admin/admin/dashboard" class="logo">                 
                    <span class="logo-mini">S S</span>                 
                    <span class="logo-lg"><img src="https://demo.smart-school.in/backend/images/s_logo.png" alt="Mount Carmel School" /></span>
                </a>             
                <nav class="navbar navbar-static-top" role="navigation">                  
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="col-md-5 col-sm-3 col-xs-5"> 
                        <span href="#" class="sidebar-session">
                            Mount Carmel School                        </span>
                    </div>
                    <div class="col-md-7 col-sm-9 col-xs-7">
                        <div class="pull-right">    
                            <form class="navbar-form navbar-left search-form" role="search"  action="https://demo.smart-school.in/admin/admin/search" method="POST">
                                <input type='hidden' name='ci_csrf_token' value=''/>                                <div class="input-group" style="padding-top:3px;">
                                    <input type="text" name="search_text" class="form-control search-form search-form3" placeholder="Search By Name, Roll Number, Enroll Number, National Id, Local Id Etc..">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav"> 

                                    <li class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">Admin                                            <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-user">
                                            <li><a href="https://demo.smart-school.in/admin/admin/changepass"><i class="fa fa-key"></i> Change Password</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li><a href="https://demo.smart-school.in/site/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                                            </li>
                                        </ul>                             
                                    </li>   
                                </ul>
                            </div>
                        </div>
                    </div>   
                </nav>
            </header>
           <aside class="main-sidebar" id="alert2">             
    <section class="sidebar" id="sibe-box">
        <form class="navbar-form navbar-left search-form2" role="search"  action="https://demo.smart-school.in/admin/admin/search" method="POST">
            <input type='hidden' name='ci_csrf_token' value=''/>            <div class="input-group ">
                <input type="text" name="search_text" class="form-control search-form" placeholder="Search By Name, Roll Number, Enroll Number, National Id, Local Id Etc..">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" style="padding: 3px 12px !important;border-radius: 0px 30px 30px 0px; background: #fff;" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>  

        <ul class="sessionul fixedmenu">
            <li class="removehover">
                <a data-toggle="modal" data-target="#sessionModal">Current Session: 2017-18<i class="fa fa-pencil pull-right"></i></a>


            </li>
            <li class="dropdown">
                <a class="dropdown-toggle drop5" data-toggle="dropdown" href="#" aria-expanded="false">
                    Quick Links <span class="glyphicon glyphicon-th pull-right"></span>
                </a>
                <ul class="dropdown-menu verticalmenu" style="min-width:194px;font-size:10pt;left:3px;">
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/student/search"><i class="fa fa-user-plus"></i>Student Details</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/studentfee"><i class="fa fa-money"></i>Collect Fees</a></li>
					<li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/income"> &nbsp;<i class="fa fa-usd"></i> Add Income</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/expense"><i class="fa fa-credit-card"></i>Add Expense</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/stuattendence"><i class="fa fa-calendar-check-o"></i>Student Attendance</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/exam"><i class="fa fa-map-o"></i>Exam List</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/examschedule"><i class="fa fa-columns"></i>Exam Schedule</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/timetable"><i class="fa fa-calendar-times-o"></i>Class Timetable</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/teacher"><i class="fa fa-user-secret"></i></i>Teachers</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/content"><i class="fa fa-download"></i>Upload Content</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/book/getall"><i class="fa fa-book"></i>Library - Books</a></li>
					<li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/itemstock"><i class="fa fa-object-group"></i>Add Item stock</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/route"><i class="fa fa-bus"></i>Transport - Routes</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/hostelroom"><i class="fa fa-building-o"></i>Hostel - Rooms</a></li>
                    <li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/notification"><i class="fa fa-bullhorn"></i>Notice Board</a></li>
					<li role="presentation"><a style="color:#282828; font-weight:600;padding:6px 20px;" role="menuitem" tabindex="-1" href="https://demo.smart-school.in/admin/mailsms/compose"><i class="fa fa-envelope-o"></i>Send Email / SMS</a></li>
                </ul>
            </li>
        </ul>                 
        <ul class="sidebar-menu verttop">
            <li class="treeview active">
                <a href="#">
                    <i class="fa fa-user-plus"></i> <span>Student Information</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/student/search"><i class="fa fa-angle-double-right"></i> Student Details</a></li>
                    <li class=""><a href="https://demo.smart-school.in/student/create"><i class="fa fa-angle-double-right"></i> Student Admission</a></li>
                    <li class=""><a href="https://demo.smart-school.in/category"><i class="fa fa-angle-double-right"></i> Student Categories</a></li>
                    <li class="active"><a href="https://demo.smart-school.in/admin/stdtransfer"><i class="fa fa-angle-double-right"></i> Promote Students</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-money"></i> <span> Fees Collection</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/studentfee"><i class="fa fa-angle-double-right"></i> Collect Fees</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/feemaster"><i class="fa fa-angle-double-right"></i> Fees Master</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/feegroup"><i class="fa fa-angle-double-right"></i> Fees Group</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/feetype"><i class="fa fa-angle-double-right"></i> Fees Type</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/feediscount"><i class="fa fa-angle-double-right"></i> Fees Discount</a></li>
                    <li class=""><a href="https://demo.smart-school.in/studentfee/searchpayment"><i class="fa fa-angle-double-right"></i> Search Fees Payment</a></li>
                    <li class=""><a href="https://demo.smart-school.in/studentfee/feesearch"><i class="fa fa-angle-double-right"></i> Search Due Fees </a></li>
                    <li class=""><a href="https://demo.smart-school.in/studentfee/reportbyname"><i class="fa fa-angle-double-right"></i> Fees Statement</a></li>                               
                    <li class=""><a href="https://demo.smart-school.in/admin/transaction/studentacademicreport"><i class="fa fa-angle-double-right"></i>
                            Balance Fees Report</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/accountant"><i class="fa fa-angle-double-right"></i> Accountants</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-usd"></i> <span>Income</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/income"><i class="fa fa-angle-double-right"></i>Add Income</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/income/incomesearch"><i class="fa fa-angle-double-right"></i>Search Income</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/incomehead"><i class="fa fa-angle-double-right"></i>Income Head</a></li>
                </ul>
            </li>

            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-credit-card"></i> <span>Expenses</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/expense"><i class="fa fa-angle-double-right"></i> Add Expense</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/expense/expensesearch"><i class="fa fa-angle-double-right"></i> Search Expense</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/expensehead"><i class="fa fa-angle-double-right"></i> Expense Head</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-calendar-check-o"></i> <span>Attendance</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/stuattendence"><i class="fa fa-angle-double-right"></i> Student Attendance</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/stuattendence/attendencereport"><i class="fa fa-angle-double-right"></i> Attendance By Date</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/stuattendence/classattendencereport"><i class="fa fa-angle-double-right"></i> Attendance Report</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-map-o"></i> <span>Examinations</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/exam"><i class="fa fa-angle-double-right"></i> Exam List</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/examschedule"><i class="fa fa-angle-double-right"></i> Exam Schedule</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/mark"><i class="fa fa-angle-double-right"></i> Marks Register</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/grade"><i class="fa fa-angle-double-right"></i> Marks Grade</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-mortar-board"></i> <span>Academics</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/timetable"><i class="fa fa-angle-double-right"></i> Class Timetable</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/teacher/assignteacher"><i class="fa fa-angle-double-right"></i> Assign Subjects</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/subject"><i class="fa fa-angle-double-right"></i> Subjects</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/teacher"><i class="fa fa-angle-double-right"></i> Teachers</a></li>
                    <li class=""><a href="https://demo.smart-school.in/classes"><i class="fa fa-angle-double-right"></i> Class</a></li>
                    <li class=""><a href="https://demo.smart-school.in/sections"><i class="fa fa-angle-double-right"></i> Sections</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-download"></i> <span>Download Center</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/content"><i class="fa fa-angle-double-right"></i> Upload Content</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/content/assignment"><i class="fa fa-angle-double-right"></i> Assignments</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/content/studymaterial"><i class="fa fa-angle-double-right"></i> Study Material</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/content/syllabus"><i class="fa fa-angle-double-right"></i> Syllabus</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/content/other"><i class="fa fa-angle-double-right"></i> Other Downloads</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-book"></i> <span>Library</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">

                    <li class=""><a href="https://demo.smart-school.in/admin/book"><i class="fa fa-angle-double-right"></i>Add Book</a></li>
                    <li class="">
                        <a href="https://demo.smart-school.in/admin/book/getall"><i class="fa fa-angle-double-right"></i>Book List</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/member"><i class="fa fa-angle-double-right"></i>Issue Return</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/member/student"><i class="fa fa-angle-double-right"></i>Add Student</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/member/teacher"><i class="fa fa-angle-double-right"></i>Add Teacher</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/librarian"><i class="fa fa-angle-double-right"></i>Librarians</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-object-group"></i> <span>Inventory</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/issueitem"><i class="fa fa-angle-double-right"></i>Issue Item</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/itemstock"><i class="fa fa-angle-double-right"></i>Add Item stock</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/item"><i class="fa fa-angle-double-right"></i>Add Item</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/itemcategory"><i class="fa fa-angle-double-right"></i>Item Category</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/itemstore"><i class="fa fa-angle-double-right"></i>Item Store</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/itemsupplier"><i class="fa fa-angle-double-right"></i>Item Supplier</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-bus"></i> <span>Transport</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/route"><i class="fa fa-angle-double-right"></i> Routes</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/vehicle"><i class="fa fa-angle-double-right"></i> Vehicles</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/vehroute"><i class="fa fa-angle-double-right"></i> Assign Vehicle</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-building-o"></i> <span>Hostel</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/hostelroom"><i class="fa fa-angle-double-right"></i> Hostel Rooms</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/roomtype"><i class="fa fa-angle-double-right"></i> Room Type</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/hostel"><i class="fa fa-angle-double-right"></i> Hostel</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-bullhorn"></i> <span>Communicate</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/admin/notification"><i class="fa fa-angle-double-right"></i> Notice Board</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/notification/add"><i class="fa fa-angle-double-right"></i> Send Message</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/mailsms/compose"><i class="fa fa-angle-double-right"></i> Send Email / SMS</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/mailsms/index"><i class="fa fa-angle-double-right"></i> Email / SMS Log</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Reports</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/student/studentreport"><i class="fa fa-angle-double-right"></i>
                            Student Report</a></li>
                    <li class=""><a href="https://demo.smart-school.in/studentfee/reportbyname"><i class="fa fa-angle-double-right"></i> Fees Statement</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/transaction/studentacademicreport"><i class="fa fa-angle-double-right"></i>
                            Balance Fees Report</a></li>                               
                    <li class=""> <a href="https://demo.smart-school.in/admin/transaction/searchtransaction"><i class="fa fa-angle-double-right"></i> Transaction Report</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/stuattendence/classattendencereport"><i class="fa fa-angle-double-right"></i> Attendance Report</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/mark"><i class="fa fa-angle-double-right"></i> Exam Marks Report</a></li>
					<li class=""><a href="https://demo.smart-school.in/admin/userlog"><i class="fa fa-angle-double-right"></i> User Log</a></li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>System Settings</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class=""><a href="https://demo.smart-school.in/schsettings"><i class="fa fa-angle-double-right"></i> General Settings</a></li>
                    <li class=""><a href="https://demo.smart-school.in/sessions"><i class="fa fa-angle-double-right"></i> Session Setting</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/notification/setting"><i class="fa fa-angle-double-right"></i> Notification Setting</a></li>
                    <li class=""><a href="https://demo.smart-school.in/smsconfig"><i class="fa fa-angle-double-right"></i> SMS Setting</a></li>
                    <li class=""><a href="https://demo.smart-school.in/emailconfig"><i class="fa fa-angle-double-right"></i> Email Setting</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/paymentsettings"><i class="fa fa-angle-double-right"></i> Payment Methods</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/admin/backup"><i class="fa fa-angle-double-right"></i> Backup / Restore</a></li>
                    <li class=""><a href="https://demo.smart-school.in/admin/language"><i class="fa fa-angle-double-right"></i> Languages</a></li>  
                                            <li class=""><a href="https://demo.smart-school.in/admin/adminuser"><i class="fa fa-angle-double-right"></i> Admin Users</a></li>  
                                            <li class=""><a href="https://demo.smart-school.in/admin/users"><i class="fa fa-angle-double-right"></i> Users</a></li> 
                    
                </ul>
            </li>
        </ul>
    </section>             
</aside>  

<div class="content-wrapper" style="min-height: 946px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> Student Information <small></small> </h1>

    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">           
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                        <div class="box-tools pull-right">
                        </div>
                    </div>
                    <form id='form1' action="https://demo.smart-school.in/admin/stdtransfer/index"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-6">                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>
                                                                                                <option value="3" >Class 3</option>
                                                                                                <option value="4" >Class 4</option>
                                                                                                <option value="5" >Class 5</option>
                                                                                                <option value="6" >Class 6</option>
                                                                                                <option value="7" >Class 7</option>
                                                                                                <option value="8" >Class 8</option>
                                                                                                <option value="9" >Class 9</option>
                                                                                                <option value="10" >Class 10</option>
                                                                                                <option value="11" >Class 11</option>
                                                                                                <option value="12" >Class 12</option>
                                                                                                <option value="17" >Class 1</option>
                                                                                                <option value="18" >Pre School</option>
                                                                                                <option value="21" >MCA</option>
                                                                                                <option value="22" >Matric</option>
                                                                                                <option value="23" >Leksehjelp</option>
                                                                                                <option value="24" >arte</option>
                                                                                                <option value="25" >New class in spanish</option>
                                                                                                <option value="26" >k</option>
                                                                                                <option value="27" >BEGINNERS</option>
                                                                                                <option value="28" >K1</option>
                                                                                                <option value="29" >K2 Sparkle Tots</option>
                                                                                                <option value="30" >Class Sangi</option>
                                                                                                <option value="31" >Sangi Class</option>
                                                                                                <option value="32" >Sangeetha Sec</option>
                                                                                                <option value="33" >Class 13</option>
                                                                                                <option value="34" >12</option>
                                                                                                <option value="35" >9</option>
                                                                                                <option value="36" >C Language</option>
                                                                                                <option value="37" >12th art</option>
                                                                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary pull-right">Search</
                        </div>
                    </form>
                </div>
            </div>
                </section>
</div>

<!--==confirm modal===-->


<div class="modal" id="pramoteStudentModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Promote Confirmation</h4>
            </div>
            <div class="modal-body">
                <p>Are you sure! You want to promote students?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary pramote_student">Save</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--===-->

<script type="text/javascript">
    function getSectionByClass(class_id, section_id) {
        if (class_id != "" && section_id != "") {
            $('#section_id').html("");
            var base_url = 'https://demo.smart-school.in/';
            var div_data = '<option value="">Select</option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {'class_id': class_id},
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj)
                    {
                        var sel = "";
                        if (section_id == obj.section_id) {
                            sel = "selected";
                        }
                        div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                    });
                    $('#section_id').append(div_data);
                }
            });
        }
    }
    $(document).ready(function () {
        var class_id = $('#class_id').val();
        var section_id = '';
        getSectionByClass(class_id, section_id);
        $(document).on('change', '#class_id', function (e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            var base_url = 'https://demo.smart-school.in/';
            var div_data = '<option value="">Select</option>';
            $.ajax({
                type: "GET",
                url: base_url + "sections/getByClass",
                data: {'class_id': class_id},
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj)
                    {
                        div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                    });

                    $('#section_id').append(div_data);
                }
            });
        });
        $(document).on('change', '#feecategory_id', function (e) {
            $('#feetype_id').html("");
            var feecategory_id = $(this).val();
            var base_url = 'https://demo.smart-school.in/';
            var div_data = '<option value="">Select</option>';
            $.ajax({
                type: "GET",
                url: base_url + "feemaster/getByFeecategory",
                data: {'feecategory_id': feecategory_id},
                dataType: "json",
                success: function (data) {
                    $.each(data, function (i, obj)
                    {
                        div_data += "<option value=" + obj.id + ">" + obj.type + "</option>";
                    });
                    $('#feetype_id').append(div_data);
                }
            });
        });
    });

    $(document).on('change', '#class_promote_id', function (e) {
        $('#section_promote_id').html("");
        var class_id = $(this).val();
        var base_url = 'https://demo.smart-school.in/';
        var div_data = '<option value="">Select</option>';
        $.ajax({
            type: "GET",
            url: base_url + "sections/getByClass",
            data: {'class_id': class_id},
            dataType: "json",
            success: function (data) {
                $.each(data, function (i, obj)
                {
                    div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                });
                $('#section_promote_id').append(div_data);
            }
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#pramoteStudentModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: false
        })

        $('#pramoteStudentModal').on('click', '.pramote_student', function (e) {
            var $modalDiv = $(e.delegateTarget);
            var datastring = $(".promote_form").serialize();
            var class_promote = $(".class_promote_id").val();
            var section_promote = $(".section_promote_id").val();
            var class_post = $(".class_post").val();
            var section_post = $(".section_post").val();
            $.ajax({
                type: "POST",

                url: 'https://demo.smart-school.in/admin/stdtransfer/promote',
                data: datastring + '&class_post=' + class_post + '&section_post=' + section_post,
                beforeSend: function () {

                    $modalDiv.addClass('modal_loading');
                },
                success: function (data) {
                    $('.sessionmodal_body').html(data);
                    var data = (JSON.parse(data));
                    if (data.status == "fail") {
                        $.each(data.msg, function (index, value) {
                            var errorDiv = '#' + index + '_error';

                            $(errorDiv).addClass('required');
                            $(errorDiv).empty().append(value);
                        });

                    } else {
                        successMsg("Students are successfully promoted");
                        location.reload(true);

                    }
                    $('#pramoteStudentModal').modal('hide');
                },
                error: function (xhr) { // if error occured
                    $modalDiv.removeClass('modal_loading');
                },
                complete: function () {
                    $modalDiv.removeClass('modal_loading');
                },
            });

        });

    });
</script>

<script src="https://demo.smart-school.in/backend/dist/js/moment.min.js"></script>
<footer class="main-footer">
    &copy;  2018 
    Mount Carmel School 3.0.1</footer>
<div class="control-sidebar-bg"></div>
</div>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>

<link href="https://demo.smart-school.in/backend/toast-alert/toastr.css" rel="stylesheet"/>
<script src="https://demo.smart-school.in/backend/toast-alert/toastr.js"></script>
<script src="https://demo.smart-school.in/backend/bootstrap/js/bootstrap.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/select2/select2.full.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/input-mask/jquery.inputmask.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="https://demo.smart-school.in/backend/dist/js/moment.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/daterangepicker/daterangepicker.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/slimScroll/jquery.slimscroll.min.js"></script>


<script src="https://demo.smart-school.in/backend/plugins/iCheck/icheck.min.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="https://demo.smart-school.in/backend/plugins/fastclick/fastclick.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/js/bootstrap-filestyle.min.js"></script>
<script src="https://demo.smart-school.in/backend/dist/js/app.min.js"></script>



<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/jszip.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/pdfmake.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/vfs_fonts.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/buttons.colVis.min.js" ></script>
<script type="text/javascript" src="https://demo.smart-school.in/backend/dist/datatables/js/ss.custom.js" ></script>

</body>
</html>


<script type="text/javascript">

    $(document).ready(function () {

    });
</script>



<!-- Button trigger modal -->
<!-- Modal -->
<div class="row">
    <div class="modal fade" id="sessionModal" tabindex="-1" role="dialog" aria-labelledby="sessionModalLabel">
        <form action="https://demo.smart-school.in/admin/admin/activeSession" id="form_modal_session" class="form-horizontal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="sessionModalLabel">Session</h4>
                    </div>
                    <div class="modal-body sessionmodal_body pb0">

                    </div>
                    <div class="modal-footer">
This quick session change will be valid for only current Admin login
                        <button type="button" class="btn btn-primary submit_session" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please wait..">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
