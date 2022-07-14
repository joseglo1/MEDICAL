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


<body class="container mifondo">
    <!--  wrapper -->
    <div id="wrapper">
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
        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <?php 
                                    $userme = $this->session->userdata('iduser');
                                    if($userme>0)
                                    {
                                        $doctorh = $this->Doctor_model->get_user_doctor($userme);
                                        //print_r($doctorh[0]['id_Doctor']);
                                       
                                        if($doctorh[0]['picture']<>'') {
                                    ?> 
                                            <img src="<?php echo base_url().'upload/profile/'.$doctorh[0]['picture']; ?>" alt="">
                                        <?php 
                                        }
                                        else 
                                        { 
                                        ?>
                                            <img src="../assets/img/user.jpg" alt="">
                                        <?php 
                                        }
                                    }
                                    else {
                                        echo "<img src='../assets/img/user.jpg' alt=''>";  
                                    } 
                                    ?>
                            </div>
                            <div class="user-info">
                                <?php
                                if($this->session->userdata('nameu')) {
                                $myname = explode(" ", $this->session->userdata('nameu'));
                                echo "<div>".$myname[0]."</div>";
                                }
                                else {
                                    echo "<div>Your <strong>Name</strong></div>";
                                }

                                 ?> 
                                <!-- <div>Jonny <strong>Deen</strong></div> -->
                                <div class="user-text-online">
                                    <?php 
                                    if($this->session->userdata('nameu')) {
                                     ?>
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                <?php }
                                    else { ?>
                                      <span class="user-circle-online btn btn-danger btn-circle "></span>&nbsp;Offline  
                                <?php  } ?>
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>

                    <!-- <li class="sidebar-search"> -->
                        <!-- search section-->
                        <!-- <div class="input-group custom-search-form"> -->
                            <!--
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            -->
                        <!-- </div> -->
                        <!--end search section-->
                    <!-- </li>  -->
                    <?php 
                        $meactive = $this->session->userdata('active');
                    ?>
                    <!--
                    <li class="">
                        <a href="<?php //echo base_url().'doctor/register' ?>"><i class="fa fa-dashboard fa-fw"></i>Register Form</a>
                    </li> -->

                    <?php
                    $isactive = $this->session->userdata('active');
                    if($this->session->userdata('active')) { 
                        if($isactive >= 0) { ?> 
                            <li>
                                <a href="<?php echo base_url().'doctor/credentials' ?>"><i class="fa fa-flask fa-fw"></i>Credentials</a>
                            </li>
                        <?php 
                        } 
                        echo "<!-- <li class='selected'> -->";
                        if($isactive >= 1) { ?> 
                            <li>
                            <a href="<?php echo base_url().'doctorservice/index' ?>"><i class="fa fa-table fa-fw"></i>Schedule</a>
                        </li>
                        <?php 
                        }
                    } 
                        ?>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->

        <!--  page-wrapper -->
        <div id="page-wrapper">
            <div class="row">
                    <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Doctor</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                                <h3>Update Data</h3>
                        </div>
                        <?php //print_r($doctor); ?>
                        <form action="<?php echo base_url().'/doctor/updatefoto';?>" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                <div class="form-group">
                                        <div class="col-md-3">
                                            <?php

                                            $urlimage=site_url().'upload/profile/'.$doctor[0]['picture'];

                                            if($doctor[0]['picture']<>'') {
                                            ?>
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url().'upload/profile/'.$doctor[0]['picture'];?>" height="150px" weight="150px" alt="">
                                            <?php
                                            } else { ?>
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url(); ?>upload/icono_perfil.png" height="150px" weight="150px" alt="">
                                            <?php 
                                            } ?>
                                            <input type="hidden" name="iddoctor" value="<?php echo $doctor[0]['id_Doctor'];  ?>">       
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label>Upload Your Profile Image  gif | jpg | png | jpeg </label>
                                            <input class="form-control" name="mydocument" value="<?php echo $doctor[0]['picture'];?>" type="file" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="mt-2 ml-2 col-lg-4 align-content-right">
                                    <input class="btn btn-warning" type="submit" value="Upload Picture" name="sendp">
                                </div>
                            </div>
                        </div>
                        </form>
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
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>DOCTOR DATA</h3>
                        </div>
                        <form action="<?php echo base_url().'/doctor/update';?>" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <input type="hidden" name="iddoctor" value="<?php echo $doctor[0]['id_Doctor'];  ?>">
                                                <label>First Name</label>
                                                <input class="form-control" name="NameDr" value="<?php echo $doctor[0]['First_Name'];?>" type="text" required />
                                                <p class="help-block"></p>
                                            </div>
                                            <div class="col-md-6">
                                                <label>Middle Name</label>
                                                <input class="form-control" name="MiddleName" value="<?php echo $doctor[0]['Middle_Name'];?>" type="text" required />
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="LastName" value="<?php echo $doctor[0]['Last_Name'];?>" type="text" required />
                                            </div>
                                            <div class="col-md-6">
                                                <label>Gender</label>
                                                <select name="Gender" class="form-control">
                                                    <option value="<?php echo $doctor[0]['Gender'];?>" selected><?php echo $doctor[0]['Gender'];?></option>
                                                    <option value="Men">Men</option>
                                                    <option value="Woman">Woman</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <?php 
                                                    $idmarital = $doctor[0]['id_Marital_Status'];
                                                    $this->load->model('MaritalStatus_model');
                                                    $maritalst = $this->MaritalStatus_model->get_maritalstatus($idmarital);
                                                    //echo "idMar ".$idmarital." y ".$maritalst['Name'];
                                                ?>
                                                <label>Status Marital</label>
                                                <select name="idMaritalStatus" class="form-control">
                                                <?php 
                                                    echo "<option value='".$idmar."' selected>".$maritalst['Name']."</option>";

                                                    foreach($marital as $m) {
                                                    
                                                    echo "<option value='".$m['id_Marital_Status']."'>".$m['Name']."</option>";
                                                    } ?>
                                                </select>
                                            </div>

                                            <div class="col-md-6">
                                                <?php 
                                                    $idnat = $doctor[0]['id_Nationality'];
                                                    $this->load->model('Nationality_model');
                                                    $nat = $this->Nationality_model->get_nationality($idnat);
                                                    //echo "id nat ".$idnat." y ".$nat['name'];
                                                ?>
                                                <label>Nationality</label>
                                                <select name="idNationality" class="form-control">
                                                <?php
                                                
                                                echo "<option value='".$idnat."' selected>".$nat['name']."</option>";
                                                    foreach($nationalities as $n) {
                                                    
                                                    echo "<option value='".$n['id_Nationality']."'>".$n['name']."</option>";
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
                                                <input class="form-control" name="DateBirth" value="<?php echo $doctor[0]['Date_Birth'];?>" type="date" required />
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <label>Phone Number</label>
                                                <input class="form-control" name="PhoneNumber" value="<?php echo $doctor[0]['Phone_Number'];?>" placeholder="" type="tel" list="phonenumbers" required/>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-5">
                                                <label>Years of Experience</label>
                                                <input class="form-control" name="ExperienceYears" value="<?php echo $doctor[0]['Experience_Years'];?>" type="number" min="1" max="55" required />
                                            </div>
                                            <div class="col-md-7">
                                                &nbsp;
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <?php 
                                                $idsSpe = explode('|',$doctor[0]['id_Specialist']);
                                                $lon = count($idsSpe);
                                                ?>
                                                <label>Specialists </label>
                                                <select id="speciality" size="5" name="idSpecialist[]" class="form-select form-select-lg mb-3" aria-label="size 5 multiple select example" multiple>
                                                <?php 
                                                    foreach($specialities as $s) {
                                                        if(in_array($s['id_Specialist'],$idsSpe))
                                                        {
                                                            echo "<option value='".$s['id_Specialist']."' selected>".$s['name']."</option>";
                                                        }
                                                        else
                                                        {
                                                            echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                                                        }
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
                                                <?php
                                                    $idsLan = explode('|',$doctor[0]['id_Language']);
                                                    $lon = count($idsLan);
                                                ?>
                                                <label>Language</label>
                                                <select name="idLanguage[]" id="lang" class="form-control" multiple="multiple">
                                                <?php
                                                    foreach($languages as $l) {
                                                        if(in_array($l['id_Language'],$idsLan)) {
                                                            echo "<option value='".$l['id_Language']."' selected>".$l['name']."</option>";
                                                        }
                                                        else {
                                                            echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";   
                                                        }
                                                    }
                                                ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <?php 
                                                $idsTool = explode('|',$doctor[0]['id_Stream_Tool']);
                                                $lon = count($idsLan);
                                                ?>
                                                <label>Stream Tool</label>
                                                <select name="idStreamTool" id="streamtool" class="form-control" multiple="multiple">
                                                    <?php
                                                    foreach($stream as $st) {
                                                        if(in_array($st['id_Stream_Tool'],$idsTool)) {
                                                            echo "<option value='".$st['id_Stream_Tool']."'selected>".$st['Name']."</option>";
                                                        }
                                                        else
                                                        {
                                                            echo "<option value='".$st['id_Stream_Tool']."'>".$st['Name']."</option>";
                                                        }
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label>About Me</label>
                                                <textarea name="Resum" col="25" rows="5" class="form-control" require><?php echo $doctor[0]['Resum'];?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <input class="form-control btn-primary" type="submit" name="send" value="UPDATE PROFILE">
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
                        </form>
                    </div> <!-- Panel Default -->
                </div> <!-- col-lg-12 -->
            </div> <!-- FIN DEL ROW -->
        </div>
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