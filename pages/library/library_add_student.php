 <!-- Left side column. contains the logo and sidebar -->
 <?php 
include ("inc/header.php");
include ("inc/l_site.php");

?>

<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper" style="min-height: 946px;">
		
   <section class="content-header">
        <h1>
            <i class="fa fa-book"></i> Library</h1>
    </section>  
    <section class="content">
        <div class="row">  
            <div class="col-md-12"> 
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"><i class="fa fa-search"></i> Select Criteria</h3>
                    </div>
                    <div class="box-body">
                                                <div class="row">
                            <div class="">
                                <form role="form" action="https://demo.smart-school.in/admin/member/student" method="post" class=""> 
                                    <input type='hidden' name='ci_csrf_token' value=''/>                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Class</label>
                                            <select autofocus="" id="class_id" name="class_id" class="form-control" >
                                                <option value="">Select</option>
                                                                                                    <option value="2" >Class 2</option>
                                                                                                        <option value="3" >Class 3</option>
                                                                                                        <option value="4" >Class 4</option>
                                                                                                        <option value="5" >Class 5</option>
                                                                                                        <option value="6" >Class 6</option>
                                                                                                        <option value="35" >9</option>
                                                                                                        <option value="36" >C Language</option>
                                                                                                        <option value="37" >12th art</option>
                                                                                                </select>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Section</label>
                                            <select  id="section_id" name="section_id" class="form-control" >
                                                <option value="">Select</option>
                                            </select>
                                            <span class="text-danger"></span>
                                        </div>
                                    </div>


                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button type="submit" name="search" value="search_filter" class="btn btn-primary btn-sm pull-right checkbox-toggle"><i class="fa fa-search"></i> Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
				<div class="box box-primary" id="tachelist">
                        <div class="box-header ptbnull">
                            <h3 class="box-title titlefix">Students</h3>
                            <div class="box-tools pull-right">

                            </div>
                        </div>
                        <div class="box-body">
                            <div class="mailbox-controls">
                            </div>
                            <div class="table-responsive mailbox-messages">
							<div class="download_label">Students</div>
                                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
								
								
								<table class="table table-striped table-bordered table-hover example dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Member Id: activate to sort column descending" style="width: 55px;">Member Id</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Library Card Number: activate to sort column ascending" style="width: 91px;">Library Card Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Admission Number: activate to sort column ascending" style="width: 91px;">Admission Number</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Student Name: activate to sort column ascending" style="width: 138px;">Student Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Class: activate to sort column ascending" style="width: 39px;">Class</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Father Name: activate to sort column ascending" style="width: 66px;">Father Name</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date Of Birth: activate to sort column ascending" style="width: 65px;">Date Of Birth</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Gender: activate to sort column ascending" style="width: 43px;">Gender</th><th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mobile Number: activate to sort column ascending" style="width: 92px;">Mobile Number</th><th class="text text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 38px;">Action</th></tr>
                                    </thead>
                                    <tbody>
                                                   <tr class="a odd" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>4234234</td>
                                                    <td>
                                                        erwrewr rwerew
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>rewrw</td>
                                                    <td>05/09/2017</td>
                                                    <td>Male</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="35" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a even" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>154555</td>
                                                    <td>
                                                        ASSEM ALJAMEEL
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>dadsd</td>
                                                    <td>18/06/1990</td>
                                                    <td>Male</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="36" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a odd" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>812133</td>
                                                    <td>
                                                        deepak dhiman
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Father Name</td>
                                                    <td>09/01/1986</td>
                                                    <td></td>

                                                    <td>9416234894</td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="39" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a even" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>5252</td>
                                                    <td>
                                                        Abdi Quule
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>quule Muuse</td>
                                                    <td>20/11/2017</td>
                                                    <td>Male</td>

                                                    <td>52562</td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="40" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a odd" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>123456</td>
                                                    <td>
                                                        Mani Maran
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Rajendran</td>
                                                    <td>10/03/2011</td>
                                                    <td>Male</td>

                                                    <td>+917708576426</td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="41" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a even" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>1234-A</td>
                                                    <td>
                                                        Loukas Jerem
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Father 1</td>
                                                    <td>13/09/2016</td>
                                                    <td>Male</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="43" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a odd" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>B231</td>
                                                    <td>
                                                        khushi nanadini
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>vinay</td>
                                                    <td>05/01/2009</td>
                                                    <td>Male</td>

                                                    <td>9911312098</td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="49" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="" data-original-title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="a even" role="row">
                                                    <td class="sorting_1"></td>
                                                    <td></td>
                                                    <td>K302</td>
                                                    <td>
                                                        vijay kumar
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>vijay</td>
                                                    <td>29/12/2008</td>
                                                    <td>Female</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                        
                                                            <button data-stdid="50" class="btn btn-default btn-xs add-student" data-toggle="tooltip" title="" data-original-title="Add">
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">10</td>
                                                    <td>011111</td>
                                                    <td>231464</td>
                                                    <td>
                                                        Gray Core
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Gray Blue</td>
                                                    <td>14/07/1998</td>
                                                    <td>Male</td>

                                                    <td>09752020614</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="10" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success even" role="row">
                                                    <td class="sorting_1">14</td>
                                                    <td>11</td>
                                                    <td>267991003</td>
                                                    <td>
                                                        Salmaan Qambi
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Abdikqadir</td>
                                                    <td>01/01/2009</td>
                                                    <td>Male</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="14" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">17</td>
                                                    <td>LC34009</td>
                                                    <td>21211</td>
                                                    <td>
                                                        Ali Ali
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>AS</td>
                                                    <td>05/09/2017</td>
                                                    <td>Male</td>

                                                    <td>4545545</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="17" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success even" role="row">
                                                    <td class="sorting_1">21</td>
                                                    <td>123456</td>
                                                    <td>2314664</td>
                                                    <td>
                                                        Rony Por
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>dadsd</td>
                                                    <td>09/05/2017</td>
                                                    <td>Male</td>

                                                    <td></td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="21" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">22</td>
                                                    <td>55887</td>
                                                    <td>999123123</td>
                                                    <td>
                                                        Juve Mac
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Someone</td>
                                                    <td>05/09/2017</td>
                                                    <td>Male</td>

                                                    <td>4492274805</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="22" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success even" role="row">
                                                    <td class="sorting_1">23</td>
                                                    <td>55888</td>
                                                    <td>94646100</td>
                                                    <td>
                                                        vinay kumar
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Vinay kumar</td>
                                                    <td>13/02/2009</td>
                                                    <td>Male</td>

                                                    <td>9911312098</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="23" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">24</td>
                                                    <td>1445522</td>
                                                    <td>2433243255</td>
                                                    <td>
                                                        Gaurav Sharma
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>cxdsc</td>
                                                    <td>11/04/2017</td>
                                                    <td>Male</td>

                                                    <td>9589658745</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="24" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success even" role="row">
                                                    <td class="sorting_1">29</td>
                                                    <td>Lib21</td>
                                                    <td>8431100101</td>
                                                    <td>
                                                        test student test student last name
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Rewwe</td>
                                                    <td>08/12/2001</td>
                                                    <td></td>

                                                    <td>99999999</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="29" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">31</td>
                                                    <td>779</td>
                                                    <td>adm1001</td>
                                                    <td>
                                                        omprakash kumar
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>rampravesh</td>
                                                    <td>20/08/1996</td>
                                                    <td>Male</td>

                                                    <td>7739951401</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="31" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success even" role="row">
                                                    <td class="sorting_1">32</td>
                                                    <td>23232</td>
                                                    <td>937823001</td>
                                                    <td>
                                                        ibrahim hussein
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>hussein</td>
                                                    <td>07/08/2016</td>
                                                    <td>Male</td>

                                                    <td>0700810435</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="32" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr><tr class="success odd" role="row">
                                                    <td class="sorting_1">33</td>
                                                    <td>34343</td>
                                                    <td>9788812101</td>
                                                    <td>
                                                        Raghu Gopi
                                                    </td>
                                                    <td>Class 3(A)</td>
                                                    <td>Gopi</td>
                                                    <td>07/07/2010</td>
                                                    <td>Male</td>

                                                    <td>1111111111</td>

                                                    <td class="text text-right">
                                                                                                                    <button type="button" class="btn btn-default btn-xs surrender-student" data-loading-text="<i class='fa fa-spinner fa-spin '></i> Please Wait.." data-toggle="tooltip" data-memberid="33" title="Surrender Membership"><i class="fa fa-mail-reply"></i></button>

                                                            

                                                    </td>
                                                </tr></tbody>
                                </table>
								
								
								</div>
                           
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

 
 