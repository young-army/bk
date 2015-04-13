      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
		 <br>
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Master Data
                   </h3>
                   <hr>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                  <!-- BEGIN NOTIFICATION PORTLET-->
               
                          
                          
                                <!--BEGIN METRO STATES-->
								
                                <div class="metro-nav">
								<?php foreach($master as $row){?>
									<div class="metro-nav-block <?php echo $row->class;?>">
                                        <a data-original-title="" href="<?php echo base_url().$row->target;?>">
                                            <i class="<?php echo $row->icon;?>"></i>
                                            <div class="info"> </div>
                                            <div class="status">Kategori <?php echo $row->kategori;?></div>
                                        </a>
                                    </div>
								<?php } ?>
                                </div>
                                <div class="clearfix"></div>
                                <!--END METRO STATES-->
                  
                  <!-- END NOTIFICATION PORTLET-->
               </div>
            </div>
			
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>