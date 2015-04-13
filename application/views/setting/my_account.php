<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     My Account
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Dashboard</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Setting</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           My Account
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Change My Account </h4>
                            
                        </div>
                        <div class="widget-body">
						<?php 
						$sess = $this->session->userdata('session_login');
						?>
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Username</label>
                                <div class="controls">
                                    <input type="text" class="span6 " value="<?php echo $sess['username'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">password</label>
                                <div class="controls">
                                    <input type="password" class="span6 " value="<?php echo $sess['password'];?>"/>
                                </div>
                            </div>
							<h5 style="color:red">Isi Data Berikut Ini Untuk Mengubah Akun Anda</h5>
							<div class="control-group">
                                <label class="control-label">Password Lama</label>
                                <div class="controls">
                                    <input type="password" class="span6 " value=""/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Username Baru</label>
                                <div class="controls">
                                    <input type="text" class="span6 " value=""/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Password Baru</label>
                                <div class="controls">
                                    <input type="password" class="span6 " value=""/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Ulangi Password Baru</label>
                                <div class="controls">
                                    <input type="password" class="span6 " value=""/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Update</button>
                                <button type="button" class="btn">Cancel</button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>