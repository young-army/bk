<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Consulting
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
                            <h4><i class="icon-reorder"></i> Consulting </h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/add_karyawan" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Judul</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Sub</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="sub" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Detail</label>
                                <div class="controls">
                                    <textarea class="span6 " name="detail" /></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Image Background</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="image" style="width:150px"/>
                                    <input type="file" class="span6 " name="src" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Sub Menu</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="jns_kel" value="right" style="margin-top:-3px"> Right
                                    <input type="radio" name="jns_kel" value="left" style="margin-top:-3px"> Left
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 " name="uraian" /></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">File</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="file" style="width:150px"/>
                                    <input type="file" class="span6 " name="files" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Link</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="link" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Target</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="target" />
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