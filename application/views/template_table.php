<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>E-Reporting Application</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="<?php echo base_url();?>assets/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style-responsive.css" rel="stylesheet" />
   <link href="<?php echo base_url();?>assets/css/style-default.css" rel="stylesheet" id="style_color" />

    <link href="<?php echo base_url();?>assets/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/assets/uniform/css/uniform.default.css" />

</head>
<style>
.red_bg{
	background:background: #f20c0c; /* Old browsers */
	background: -moz-linear-gradient(top,  #f20c0c 0%, #c10909 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f20c0c), color-stop(100%,#c10909)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* IE10+ */
	background: linear-gradient(to bottom,  #f20c0c 0%,#c10909 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f20c0c', endColorstr='#c10909',GradientType=0 ); /* IE6-9 */			
}

</style>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner red_bg">
           <div class="container-fluid red_bg">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone red_bg">
                   <div class="icon-reorder"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
                   <img src="<?php echo base_url();?>assets/img/logo.png" style="margin-top:6px" />
				   
				    
               
               <!-- END LOGO -->
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse" style="background:background: #f20c0c; /* Old browsers */
				background: -moz-linear-gradient(top,  #f20c0c 0%, #c10909 100%); /* FF3.6+ */
				background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#f20c0c), color-stop(100%,#c10909)); /* Chrome,Safari4+ */
				background: -webkit-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* Chrome10+,Safari5.1+ */
				background: -o-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* Opera 11.10+ */
				background: -ms-linear-gradient(top,  #f20c0c 0%,#c10909 100%); /* IE10+ */
				background: linear-gradient(to bottom,  #f20c0c 0%,#c10909 100%); /* W3C */
				filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f20c0c', endColorstr='#c10909',GradientType=0 ); /* IE6-9 */	">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar" style="margin-bottom:3px"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
              
               
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
          <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              <div class="navbar-inverse">
                  <form class="navbar-search visible-phone">
                      <input type="text" class="search-query" placeholder="Search" />
                  </form>
              </div>
              <!-- END RESPONSIVE QUICK SEARCH FORM -->
              <!-- BEGIN SIDEBAR MENU -->
              <?php 
			  $sess = $this->session->userdata('session_login');
			  if($sess['status']==1){
				$this->load->view('navbar/navbar_superuser');
			  }else{
				$this->load->view('navbar/navbar_user');
			  }
			  ?>
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <?php $this->load->view($page);?>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <div id="footer" style="background:dimgray;color:white">
       Copyright &copy; 2015 E-Reporting Apps
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="<?php echo base_url();?>assets/assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="<?php echo base_url();?>assets/assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/assets/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="<?php echo base_url();?>assets/assets/data-tables/DT_bootstrap.js"></script>


   <!--common script for all pages-->
   <script src="<?php echo base_url();?>assets/js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="<?php echo base_url();?>assets/js/dynamic-table.js"></script>

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>