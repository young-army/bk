<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Request
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
                            <h4><i class="icon-reorder"></i> Request</h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/save_setting" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Judul</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul" readonly />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Nama Pengirim</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="pengirim" readonly />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="email" readonly />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Telp</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="telp" readonly />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Keterangan</label>
                                <div class="controls">
                                    <textarea class="span6 " name="ket"></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="status" value="1" style="margin-top:-3px"> Dibaca
                                    <input type="radio" name="Status" value="2" style="margin-top:-3px"> Dibalas
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jawaban</label>
                                
                            </div>
							<div class="control-group">
                                <div class="controls" style="margin-left:0px">
                                    <textarea class="span12 " name="ket"></textarea>
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