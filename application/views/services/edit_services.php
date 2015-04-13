<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Services
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
                            <h4><i class="icon-reorder"></i> Services</h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/update_services" class="form-horizontal" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?php echo $services->id;?>">
                            <div class="control-group">
                                <label class="control-label">Judul</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul" value="<?php echo $services->judul;?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Author</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="author" value="<?php echo $services->author;?>"/>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 " name="uraian" ><?php echo $services->keterangan;?></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">File Gambar</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="image_name" style="width:150px" value="<?php echo $services->gambar;?>"/>
                                    <input type="file" class="span6 " name="image" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="status" value="1" style="margin-top:-3px"> Enable
                                    <input type="radio" name="status" value="0" style="margin-top:-3px"> Disable
                                </div>
                            </div>
							
                            <div class="form-actions">
                                <a href="<?php echo base_url();?>dashboard/simpan_services"><button type="submit" class="btn btn-success">Simpan</button>
                                
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