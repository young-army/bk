<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     News
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
                            <h4><i class="icon-reorder"></i> News</h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/save_setting" class="form-horizontal" enctype="multipart/form-data">
                            
							<div class="control-group">
                                <label class="control-label">Judul</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="author"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Sumber</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="sumber"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Tanggal</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="tanggal"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Ringkasan</label>
                                <div class="controls">
                                    <textarea class="span6 " name="ringkasan"></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 " name="uraian"></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Image Kecil</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="image_name" style="width:150px"/>
                                    <input type="file" class="span6 " name="image" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="status" value="1" style="margin-top:-3px"> Enable
                                    <input type="radio" name="Status" value="0" style="margin-top:-3px"> Disable
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