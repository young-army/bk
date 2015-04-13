<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Setting
                   </h3>
                   <hr>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                <!-- BEGIN EXAMPLE TABLE widget-->
                <div class="widget black">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Setting</h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/save_setting" class="form-horizontal" enctype="multipart/form-data">
							
							<input type="hidden" name="id" value="<?php echo $data['id'];?>">
                            <div class="control-group">
                                <label class="control-label">Nama Perusahaan</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="nama" value="<?php echo $data['perusahaan'];?>"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="email" value="<?php echo $data['email'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">No Telp</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="telp" value="<?php echo $data['telp'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Facebook</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="fb" value="<?php echo $data['fb'];?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Twitter</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="twit" value="<?php echo $data['twitter'];?>" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Youtube</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="youtube" value="<?php echo $data['youtube'];?>" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Logo</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="image_name" style="width:150px" value="<?php echo $data['logo'];?>"/>
                                    <input type="file" class="span6 " name="image" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="status" value="1" style="margin-top:-3px" <?php if($data['status']==1){ echo 'checked'; }?>> Enable
                                    <input type="radio" name="Status" value="0" style="margin-top:-3px" <?php if($data['status']==0){ echo 'checked'; }?>> Disable
                                </div>
                            </div>
							
                            <div class="form-actions">
                                <a href="<?php echo base_url();?>dashboard/simpan"><button type="submit" class="btn btn-success">Simpan</button>
                                
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