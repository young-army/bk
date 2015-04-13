<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                   Bankers
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
                            <h4><i class="icon-reorder"></i> Bankers</h4>
							
						</div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form method="post" action="<?php echo base_url();?>dashboard/add_karyawan" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Foto</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="image" style="width:150px"/>
                                    <input type="file" class="span6 " name="src" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Jabatan</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="judul" />
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Keahlian</label>
                                <div class="controls">
                                    <textarea class="span6 " name="uraian" /></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 " name="uraian" /></textarea>
                                </div>
                            </div>
							<div class="control-group">
                                <label class="control-label">Sub Menu</label>
                                <div class="controls" style="text-align:left">
                                    <input type="radio" name="jns_kel" value="right" style="margin-top:-3px"> Enable
                                    <input type="radio" name="jns_kel" value="left" style="margin-top:-3px"> Desable
                                </div>
                            </div>
							
                            <div class="form-actions">
                                <a href="<?php echo base_url();?>dashboard/simpan"><button type="submit" class="btn btn-success">Simpan</button>
                                <a href="#"><button type="submit" class="btn btn-success">Batal</button>
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