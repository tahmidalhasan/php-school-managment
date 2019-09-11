 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
  <section class="content-header">
        <h1>
            <i class="fa fa-bullhorn"></i> Communicate</h1>
    </section>
    <section class="content">

        <div class="row">           
            <div class="col-md-12">

                <!-- Custom Tabs (Pulled to the right) -->
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs pull-right">
                        <li><a href="#tab_class" data-toggle="tab">Class</a></li>
                        <li><a href="#tab_perticular" data-toggle="tab">Individual</a></li>
                        <li class="active"><a href="#tab_group" data-toggle="tab">Group</a></li>


                        <li class="pull-left header"><i class="fa fa-envelope-o"></i> Send Email / SMS</li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab_group">
                            <form action="https://demo.smart-school.in/admin/mailsms/send_group" method="post" id="group_form">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input autofocus="" class="form-control" name="group_title">
                                            </div>
                                            <div class="form-group">
                                                <label class="pr20">Send Through</label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="mail" name="group_send_by[]"> Email                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" value="sms" name="group_send_by[]">SMS                                                </label>

                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea id="compose-textarea" name="group_message" class="form-control compose-textarea">
                                                                                                    </textarea>
                                                <span class="text-danger"></span>
                                            </div> 


                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Message To</label>
                                                <div class="well minheight303">
                                                <div class="checkbox mt0">
                                                    <label><input type="checkbox" name="user[]" value="student"> <b>Students</b> </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="user[]" value="parent"> <b>Guardians</b></label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="user[]" value="teacher"> <b>Teachers</b> </label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="user[]" value="accountants"> <b>Accountants</b></label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="user[]" value="librarians"> <b>Librarians</b></label>
                                                </div>

                                            </div>

                                         </div>       
                                        </div>
                                    </div>

                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_group" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> Send</button>

                                    </div>

                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_perticular">
                            <form action="https://demo.smart-school.in/admin/mailsms/send_individual" method="post" id="individual_form">

                                <!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="form-control" name="individual_title">
                                            </div>
                                            <div class="form-group">
                                                <label class="pr20">Send Through</label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="individual_send_by[]" value="mail"> Email                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="individual_send_by[]" value="sms">SMS                                                </label>

                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea id="compose-textarea" name="individual_message" class="form-control compose-textarea">
                                                                                                    </textarea>
                                                <span class="text-danger"></span>
                                            </div>

                                        </div>
                                        <div class="col-md-4">

                                            <div class="form-group">
                                                <label for="inpuFname">Message To</label>
                                                <div class="input-group">
                                                    <div class="input-group-btn bs-dropdown-to-select-group">
                                                        <button type="button" class="btn btn-default btn-searchsm dropdown-toggle as-is bs-dropdown-to-select" data-toggle="dropdown">
                                                            <span data-bind="bs-drp-sel-label">Select</span>
                                                            <input type="hidden" name="selected_value" data-bind="bs-drp-sel-value" value="">
                                                            <span class="caret"></span>

                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="">

                                                            <li data-value="student"><a href="#" >Students</a></li>
                                                            <li data-value="parent"><a href="#">Guardians</a></li>
                                                            <li data-value="teacher"><a href="#">Teachers</a></li>
                                                            <li data-value="accountant"><a href="#">Accountants</a></li>
                                                            <li data-value="librarian"><a href="#">Librarians</a></li>
                                                        </ul>
                                                    </div>
                                                    <input type="text" value="" data-record="" data-email="" data-mobileno="" class="form-control" name="text" id="search-query">

                                                    <div id="suggesstion-box"></div>
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-primary btn-searchsm add-btn" type="button">Add</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="dual-list list-right">
                                                <div class="well minheight260">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-group">
                                                                <input type="text" name="SearchDualList" class="form-control" placeholder="Search..." />
                                                                <div class="input-group-btn"><span class="btn btn-default input-group-addon bright"><i class="fa fa-search"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wellscroll">
                                                        <ul class="list-group send_list">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_individual" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> Send</button>
                                    </div>

                                </div>
                                <!-- /.box-footer -->
                            </form>
                        </div>
                        <div class="tab-pane" id="tab_class">
                            <form action="https://demo.smart-school.in/admin/mailsms/send_class" method="post" id="class_form">

                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label>Title</label>
                                                <input class="form-control" name="class_title">
                                            </div>
                                            <div class="form-group">
                                                <label class="pr20">Send Through</label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="class_send_by[]" value="mail"> Email                                                </label>
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="class_send_by[]" value="sms">SMS                                                </label>

                                                <span class="text-danger"></span>
                                            </div>
                                            <div class="form-group">
                                                <label>Message</label>
                                                <textarea id="compose-textarea" name="class_message" class="form-control compose-textarea">
                                                                                                    </textarea>
                                                <span class="text-danger"></span>
                                            </div>

                                        </div>
                                        <div class="col-md-4">
                                            <div class="row">
                                                <div class="form-group col-xs-10 col-sm-12 col-md-12 col-lg-12">
                                                    <label for="exampleInputEmail1">Message To</label>
                                                    <select  id="class_id" name="class_id" class="form-control"  >
                                                        <option value="">Select</option>
                                                                                                                    <option value="2">Class 2</option>
                                                                                                                        <option value="3">Class 3</option>
                                                                                                                        <option value="4">Class 4</option>
                                                                                                                        <option value="5">Class 5</option>
                                                                                                                        <option value="6">Class 6</option>
                                                                                                                        <option value="7">Class 7</option>
                                                                                                                        <option value="8">Class 8</option>
                                                                                                                        <option value="9">Class 9</option>
                                                                                                                        <option value="10">Class 10</option>
                                                                                                                        <option value="11">Class 11</option>
                                                                                                                        <option value="12">Class 12</option>
                                                                                                                        <option value="17">Class 1</option>
                                                                                                                        <option value="18">Pre School</option>
                                                                                                                        <option value="21">MCA</option>
                                                                                                                        <option value="22">Matric</option>
                                                                                                                        <option value="23">Leksehjelp</option>
                                                                                                                        <option value="24">arte</option>
                                                                                                                        <option value="25">New class in spanish</option>
                                                                                                                        <option value="26">k</option>
                                                                                                                        <option value="27">BEGINNERS</option>
                                                                                                                        <option value="28">K1</option>
                                                                                                                        <option value="29">K2 Sparkle Tots</option>
                                                                                                                        <option value="30">Class Sangi</option>
                                                                                                                        <option value="31">Sangi Class</option>
                                                                                                                        <option value="32">Sangeetha Sec</option>
                                                                                                                        <option value="33">Class 13</option>
                                                                                                                        <option value="34">12</option>
                                                                                                                        <option value="35">9</option>
                                                                                                                        <option value="36">C Language</option>
                                                                                                                        <option value="37">12th art</option>
                                                                                                                </select>
                                                </div>
                                            </div>
                                            <div class="dual-list list-right">
                                                <div class="well minheight260">
                                                    <div class="wellscroll">
                                                        <b>Section</b>
                                                        <ul class="list-group section_list listcheckbox">

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-primary submit_class" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Sending" ><i class="fa fa-envelope-o"></i> Send</button>
                                    </div>
                                </div>
                            </form>
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

 
 