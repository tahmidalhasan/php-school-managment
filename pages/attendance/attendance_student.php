 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>
<style type="text/css">
    .radio {
        padding-left: 20px; }
    .radio label {
        display: inline-block;
        vertical-align: middle;
        position: relative;
        padding-left: 5px; }
    .radio label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 50%;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out;
        transition: border 0.15s ease-in-out; }
    .radio label::after {
        display: inline-block;
        position: absolute;
        content: " ";
        width: 11px;
        height: 11px;
        left: 3px;
        top: 3px;
        margin-left: -20px;
        border-radius: 50%;
        background-color: #555555;
        -webkit-transform: scale(0, 0);
        -ms-transform: scale(0, 0);
        -o-transform: scale(0, 0);
        transform: scale(0, 0);
        -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33); }
    .radio input[type="radio"] {
        opacity: 0;
        z-index: 1; }
    .radio input[type="radio"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px; }
    .radio input[type="radio"]:checked + label::after {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1); }
    .radio input[type="radio"]:disabled + label {
        opacity: 0.65; }
    .radio input[type="radio"]:disabled + label::before {
        cursor: not-allowed; }
    .radio.radio-inline {
        margin-top: 0; }
    .radio-primary input[type="radio"] + label::after {
        background-color: #337ab7; }
    .radio-primary input[type="radio"]:checked + label::before {
        border-color: #337ab7; }
    .radio-primary input[type="radio"]:checked + label::after {
        background-color: #337ab7; }
    .radio-danger input[type="radio"] + label::after {
        background-color: #d9534f; }
    .radio-danger input[type="radio"]:checked + label::before {
        border-color: #d9534f; }
    .radio-danger input[type="radio"]:checked + label::after {
        background-color: #d9534f; }
    .radio-info input[type="radio"] + label::after {
        background-color: #5bc0de; }
    .radio-info input[type="radio"]:checked + label::before {
        border-color: #5bc0de; }
    .radio-info input[type="radio"]:checked + label::after {
        background-color: #5bc0de; }
    </style>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  
 <section class="content-header">
        <h1>
            <i class="fa fa-calendar-check-o"></i> Attendance <small></small></h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">

                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <form id='form1' action="https://demo.smart-school.in/admin/stuattendence/index"  method="post" accept-charset="utf-8">
                        <div class="box-body">
                            
                            <input type='hidden' name='ci_csrf_token' value=''/>                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Class</label>
                                        <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                            <option value="">Select</option>
                                                                                            <option value="2" >Class 2</option>
                                                                                                        <option value="3" >Class 3</option>
                                                                                                        <option value="4" >Class 4</option>
                                                                                                        <option value="5" >Class 5</option>
																										<option value="33" >Class 13</option>
                                                                                                        <option value="34" >12</option>
                                                                                                        <option value="35" >9</option>
                                                                                                        <option value="36" >C Language</option>
                                                                                                        <option value="37" >12th art</option>
                                                                                                </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Section</label>
                                        <select  id="section_id" name="section_id" class="form-control" >
                                            <option value="">Select</option>
                                        </select>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">
                                            Attendance                                            Date                                        </label>
                                        <input id="date" name="date" placeholder="" type="text" class="form-control"  value="07/04/2018" readonly="readonly"/>
                                        <span class="text-danger"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer">
                            <button type="submit" name="search" value="search" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                        </div>
                    </form>
                </div>
				
				<div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"><i class="fa fa-users"></i> Student List</h3>
                            <div class="box-tools pull-right">
                            </div>
                        </div>
                        <div class="box-body">
                                                            <form action="https://demo.smart-school.in/admin/stuattendence/index" method="post">
                                    <input type="hidden" name="ci_csrf_token" value="">                                    <div class="mailbox-controls">
                                        <span class="button-checkbox">
                                            <button type="button" class="btn btn-sm btn-primary" data-color="primary"><i class="state-icon glyphicon glyphicon-unchecked"></i>&nbsp;Mark As Holiday</button>
                                            <input type="checkbox" class="hidden" name="holiday" value="checked">
                                        </span>
                                        <div class="pull-right">
                                            <button type="submit" name="search" value="saveattendence" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-save"></i> Save Attendance </button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="class_id" value="3">
                                    <input type="hidden" name="section_id" value="1">
                                    <input type="hidden" name="date" value="07/04/2018">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Admission Number</th>
                                                    <th>Roll Number</th>
                                                    <th>Name</th>
                                                    <th class="">Attendance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                    
                                                                                                        <tr>
                                                        <td>
                                                            <input type="hidden" name="student_session[]" value="53">
                                                            <input type="hidden" value="0" name="attendendence_id53">
                                                            6                                                        </td>
                                                        <td>
                                                            267991003                                                        </td>
                                                        <td>
                                                            	1002                                                        </td>

                                                        <td>
                                                            Salmaan Qambi                                                        </td>
                                                        <td>
                                                                                                                                    <div class="radio radio-info radio-inline">
                                                                            <input checked="" type="radio" id="attendencetype53-0" value="1" name="attendencetype53">
                                                                            <label for="attendencetype53-0"> 
                                                                                Present 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype53-1" value="2" name="attendencetype53">
                                                                            <label for="attendencetype53-1"> 
                                                                                Late With Excuse 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype53-2" value="3" name="attendencetype53">
                                                                            <label for="attendencetype53-2"> 
                                                                                Late 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype53-3" value="4" name="attendencetype53">
                                                                            <label for="attendencetype53-3"> 
                                                                                Absent 
                                                                            </label>
                                                                        </div>
                                                                        
                                                        </td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>
                                                            <input type="hidden" name="student_session[]" value="66">
                                                            <input type="hidden" value="0" name="attendendence_id66">
                                                            7                                                        </td>
                                                        <td>
                                                            21211                                                        </td>
                                                        <td>
                                                            1212                                                        </td>

                                                        <td>
                                                            Ali Ali                                                        </td>
                                                        <td>
                                                                                                                                    <div class="radio radio-info radio-inline">
                                                                            <input checked="" type="radio" id="attendencetype66-0" value="1" name="attendencetype66">
                                                                            <label for="attendencetype66-0"> 
                                                                                Present 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype66-1" value="2" name="attendencetype66">
                                                                            <label for="attendencetype66-1"> 
                                                                                Late With Excuse 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype66-2" value="3" name="attendencetype66">
                                                                            <label for="attendencetype66-2"> 
                                                                                Late 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype66-3" value="4" name="attendencetype66">
                                                                            <label for="attendencetype66-3"> 
                                                                                Absent 
                                                                            </label>
                                                                        </div>
                                                                        
                                                        </td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>
                                                            <input type="hidden" name="student_session[]" value="67">
                                                            <input type="hidden" value="0" name="attendendence_id67">
                                                            8                                                        </td>
                                                        <td>
                                                            999123123                                                        </td>
                                                        <td>
                                                            999123123                                                        </td>

                                                        <td>
                                                            Juve Mac                                                        </td>
                                                        <td>
                                                                                                                                    <div class="radio radio-info radio-inline">
                                                                            <input checked="" type="radio" id="attendencetype67-0" value="1" name="attendencetype67">
                                                                            <label for="attendencetype67-0"> 
                                                                                Present 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype67-1" value="2" name="attendencetype67">
                                                                            <label for="attendencetype67-1"> 
                                                                                Late With Excuse 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype67-2" value="3" name="attendencetype67">
                                                                            <label for="attendencetype67-2"> 
                                                                                Late 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype67-3" value="4" name="attendencetype67">
                                                                            <label for="attendencetype67-3"> 
                                                                                Absent 
                                                                            </label>
                                                                        </div>
                                                                        
                                                        </td>
                                                    </tr>
                                                                                                        <tr>
                                                        <td>
                                                            <input type="hidden" name="student_session[]" value="71">
                                                            <input type="hidden" value="0" name="attendendence_id71">
                                                            9                                                        </td>
                                                        <td>
                                                            937823001                                                        </td>
                                                        <td>
                                                            12345                                                        </td>

                                                        <td>
                                                            ibrahim hussein                                                        </td>
                                                        <td>
                                                                                                                                    <div class="radio radio-info radio-inline">
                                                                            <input checked="" type="radio" id="attendencetype71-0" value="1" name="attendencetype71">
                                                                            <label for="attendencetype71-0"> 
                                                                                Present 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype71-1" value="2" name="attendencetype71">
                                                                            <label for="attendencetype71-1"> 
                                                                                Late With Excuse 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype71-2" value="3" name="attendencetype71">
                                                                            <label for="attendencetype71-2"> 
                                                                                Late 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype71-3" value="4" name="attendencetype71">
                                                                            <label for="attendencetype71-3"> 
                                                                                Absent 
                                                                            </label>
                                                                        </div>
                                                                        
                                                        </td>
                                  
                                                             <tr>
                                                        <td>
                                                            <input type="hidden" name="student_session[]" value="106">
                                                            <input type="hidden" value="0" name="attendendence_id106">
                                                            19                                                        </td>
                                                        <td>
                                                            K302                                                        </td>
                                                        <td>
                                                            102                                                        </td>

                                                        <td>
                                                            vijay kumar                                                        </td>
                                                        <td>
                                                                                                                                    <div class="radio radio-info radio-inline">
                                                                            <input checked="" type="radio" id="attendencetype106-0" value="1" name="attendencetype106">
                                                                            <label for="attendencetype106-0"> 
                                                                                Present 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype106-1" value="2" name="attendencetype106">
                                                                            <label for="attendencetype106-1"> 
                                                                                Late With Excuse 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype106-2" value="3" name="attendencetype106">
                                                                            <label for="attendencetype106-2"> 
                                                                                Late 
                                                                            </label>
                                                                        </div>
                                                                                                                                                <div class="radio radio-info radio-inline">
                                                                            <input type="radio" id="attendencetype106-3" value="4" name="attendencetype106">
                                                                            <label for="attendencetype106-3"> 
                                                                                Absent 
                                                                            </label>
                                                                        </div>
                                                                        
                                                        </td>
                                                    </tr>
                                                                                                </tbody>
                                        </table>
                                    </div>
                                </form>
                                                        </div>
                    </div>
				
         
		 </section>


</div>



 
 <?php 
include ("inc/footer1.php");
include ("inc/r_site.php");
include ("inc/footer2.php");

?>

 
 