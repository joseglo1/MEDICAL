<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Register</title>
    <!-- Core CSS - Include with every page
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />  -->
    <?php
    echo link_tag("assets/plugins/bootstrap/bootstrap-3.4.1-dist/css/bootstrap.css");
    echo link_tag("assets/plugins/jQuery-Multiselect/dist/css/bootstrap-multiselect.css");
    echo link_tag("assets/plugins/example-styles.css");
    echo link_tag("assets/plugins/demo-styles.css");
    echo link_tag("assets/font-awesome/css/font-awesome.css");
    echo link_tag("assets/plugins/pace/pace-theme-big-counter.css");
    echo link_tag("assets/css/style.css");
    echo link_tag("assets/css/main-style.css");
    ?>
    <!-- Page-Level CSS
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" /> -->
    <?php
    echo link_tag("assets/plugins/dataTables/dataTables.bootstrap.css");
    ?>

</head>

<body>
    <!--  wrapper -->
    <!-- <div id="wrapper"> -->
    <div class="container">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            
            <div class="navbar-header">
                <!--
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>  -->
                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url();?>assets/img/logo.png" alt="" />
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown mail -->
                <!--
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-danger">3</span><i class="fa fa-envelope fa-3x"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-danger">Andrew Smith</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-info">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong><span class=" label label-success">Jonney Depp</span></strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                   
                </li>
                -->
                <!--
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-success">4</span>  <i class="fa fa-tasks fa-3x"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Register</strong>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Attach Documents</strong>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        
                    </ul>
                    
                </li>
                -->
                <!-- 
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <span class="top-label label label-warning">5</span>  <i class="fa fa-bell fa-3x"></i>
                    </a>
                    
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i>New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i>3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i>Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i>New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i>Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                        
                    </ul>
                    
                </li>
                -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="<?php echo site_url();?>doctor/profile"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <!--
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                    -->
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url();?>acceso/close"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
    </div>

    <div class="container">
        <form action="<?php echo base_url().'/doctor/signup';?>" method="post" enctype="multipart/form-data">
        <!--  page-wrapper -->
            <div class="row">
                <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">REGISTER DOCTOR</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                DATA TO LOGIN
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                	<div class="form-group">
                                    	<div class="col-md-12">
                                        	<label>Email</label>
                                        	<input class="form-control" name="email" type="email" required />
                                        	<p class="help-block"></p>
                                    	</div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Password (More then 6 characters)</label>
                                            <input class="form-control" id="pass1" name="password" type="password" min="6" required />
                                        </div>
                                        <div class="col-md-6">
                                            <label>repeat Password</label>
                                            <input class="form-control" id="pass2" name="password2" type="password" required />
                                        </div>
                                	</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 align-content-center">
                                    <?php if($mymessage<>null) { ?>
                                    <h4 style="color: red;"><?php print ($mymessage); ?></h4>
                                    <?php }  ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DOCTOR DATA
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                    <div class="row">
                                    	<div class="form-group">
                                        	<div class="col-md-6">
                                            	<label>First Name</label>
                                            	<input class="form-control" name="NameDr" type="text" required />
                                            	<p class="help-block"></p>
                                        	</div>
                                        	<div class="col-md-6">
                                            	<label>Middle Name</label>
                                            	<input class="form-control" name="MiddleName" type="text" required />
                                            	<p class="help-block"></p>
                                        	</div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="LastName" type="text" required />
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Gender</label>
                                            	<select name="Gender" class="form-control">
                                                	<option value="Men" selected>Men</option>
                                                	<option value="Woman">Woman</option>
                                            	</select>
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <label>Status Marital</label>
                                                <select name="idMaritalStatus" class="form-control">
                                                <?php 
                                            	 $primero = 0;
                                            	 foreach($marital as $m) {
                                            	 	if($primero==0) {
                                            	 		echo "<option value='".$m['id_Marital_Status']."' selected>".$m['Name']."</option>";
                                            	 		$primero = 1;
                                            	 	}
                                            	 	else
                                            	 	{
                                                	echo "<option value='".$m['id_Marital_Status']."'>".$m['Name']."</option>";
                                                	}
                                                 } ?>
                                            	</select>
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Nationality</label>
                                            	<select name="idNationality" class="form-control">
                                            	<?php 
                                            	 $primero = 0;
                                            	 foreach($nationalities as $n) {
                                            	 	if($primero==0) {
                                            	 		echo "<option value='".$n['id_Nationality']."' selected>".$n['name']."</option>";
                                            	 		$primero = 1;
                                            	 	}
                                            	 	else
                                            	 	{
                                                	echo "<option value='".$n['id_Nationality']."'>".$n['name']."</option>";
                                                	}
                                                 } ?>
                                            	</select>
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <label>Date of Birth</label>
                                                <input class="form-control" name="DateBirth" type="date" required />
                                                
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Phone Number</label>
                                            	<input class="form-control" name="PhoneNumber" placeholder="" type="tel" list="phonenumbers" required/>
                                            	
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-12">
                                                <label>Select your Specialists -</label>
                                            </div>
                                            <div class="col-md-12">
                                                <select id="speciality" size="5" name="idSpecialist[]" class="form-select form-select-lg mb-3" aria-label="size 5 multiple select example" multiple>
                                                <?php 
                                                	$primero=0;
                                                	foreach($specialities as $s) {
                                                        /*
                                                    	if($primero==0) {
                                                    		$primero=1;
                                                    		echo "<option value='".$s['id_Specialist']."' selected>".$s['name']."</option>";
                                                    	}
                                                    	else { */
                                                    		echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                                                    	//}
                                                    }

                                                ?>	
                                            	</select>
                                                
                                            </div>
                                        </div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-12">
                                                <label>Language</label>
                                            </div>  
                                            <div class="col-md-12">
                                                <select id="lang" name="idLanguage[]" class="form-select form-select-lg mb-3" aria-label="size 5 multiple select example" multiple>
                                                <?php
                                                 $primero=0;
                                                 foreach($languages as $l) {
                                                  /* if($primero==0) {
                                                  	$primero = 1;
                                                  	echo "<option value='".$l['id_Language']."' selected>".$l['name']."</option>";
                                                  }
                                                  else
                                                  { */
                                                  	echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";
                                                  //}
                                                 }
                                                 ?>
                                            	</select>
                                                        
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                            	<label>Select Stream Tools</label>
                                            </div>
                                            <div class="col-md-12">
                                            	<select id="streamtool" name="idStreamTool" class="form-select form-select-lg mb-3" aria-label="size 5 multiple select example" multiple>
                                            	 <?php
                                                 $primero=0;
                                                 foreach($stream as $st) {
                                                  // if($primero==0) {
                                                  	//  $primero = 1;
                                                  	//  echo "<option value='".$st['id_Stream_Tool']."' selected>".$st['Name']."</option>";
                                                  //}
                                                  //else
                                                  //{
                                                  	echo "<option value='".$st['id_Stream_Tool']."'>".$st['Name']."</option>";
                                                  //}
                                                 }
                                                 ?>
                                                	<!-- <option value="Zoom" selected>Zoom</option>
                                                	<option value="GoogleMeet">GoogleMeet</option> -->
                                            	</select>
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Years of Experience</label>
                                                <input class="form-control" name="ExperienceYears" size="5" type="number" min="1" max="55" required />
                                            </div>
                                            <div class="col-md-6">
                                            	<label>About Me</label>
                                            	<textarea name="Resum" col="25" rows="5" class="form-control" require>A brief description about you</textarea>
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                	<div class="form-group">
                                        <div class="col-md-6">
                                            <input id="newregister" class="form-control btn-primary" type="submit" name="send" value="SEND">
                                        </div>
                                        <div class="col-md-6">
                                        	<input class="form-control btn-danger" type="reset" name="CANCEL" value="CANCEL">
                                        </div>
                                	</div>
                                	<datalist id="phonenumbers">
										<option value="+01(154) 215-4468">
									</datalist>
                                </div> <!-- fin del contenido --> 
                            </div> <!-- fin del row -->
                        </div> <!-- Panel Body -->
                    </div> <!-- Panel Default -->
                </div> <!-- col-lg-12 -->
            </div> <!-- FIN DEL ROW -->
        </form>
        <?php //echo form_close(); ?>

        

        <script type="text/javascript">
            function verificar()
            {
                var px1 = document.getElementById('pass1');
                var px2 = document.getElementById('pass2');
                if(px1.value != px2.value)
                {
                    alert("Error - Passwords no match --");
                }
            }
        </script>
    </div>
    <!-- end wrapper -->
    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/plugins/jquery-2.2.4.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/jquery.multi-select.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/metisMenu/jquery.metisMenu.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/pace/pace.js';?>"></script>
    <script src="<?php // echo base_url().'assets/scripts/siminta.js';?>"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url().'assets/plugins/dataTables/jquery.dataTables.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/dataTables/dataTables.bootstrap.js';?>"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
            $('#speciality').multiSelect();
            $('#lang').multiSelect();
            $('#streamtool').multiSelect();
        });
    </script>
</body>
</html>