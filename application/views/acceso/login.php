<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical System</title>
    <!--
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/main-style.css" rel="stylesheet" />
    -->
    <?php
        echo link_tag('assets/plugins/bootstrap/bootstrap-3.4.1-dist/css/bootstrap.css');
        echo link_tag('assets/font-awesome/css/font-awesome.css');
        echo link_tag('assets/plugins/pace/pace-theme-big-counter.css');
        echo link_tag('assets/css/style.css');
        echo link_tag('assets/css/main-style.css');
    ?>
    <style>
        body {
          background-image: url('<?php echo base_url(); ?>assets/img/login_user.jpg');
    
        }
    </style>
</head>

<body class="body-Login-back">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">

              <img src="<?php echo base_url(); ?>assets/img/logo2.png" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    
                    <div class="panel-body">
                        <?php echo form_open('acceso/autenticar',array("class"=>"form-horizontal")); ?>
                            <!-- <form role="form"> -->
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="Email" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="">
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <label><a href="<?php echo site_url('doctor/register');?>">Doctor Register</a></label>
                                        <label>&nbsp;&nbsp;</label>
                                        <label><a href="<?php echo site_url('patient/register');?>">Patient Register</a></label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="text-center">
                                        <label>
                                            <a href="<?php echo site_url('acceso/restore');?>">Forgot Password?</a>
                                        </label>
                                    </div>
                                </div>
                                <br>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success" value="LOGIN" />
                                <h4 style="color:red;">&nbsp;&nbsp;&nbsp;<?php echo $errorlogin; ?></h4>
                            
                            </fieldset>
                        <?php echo form_close(); ?>
                        <!-- </form> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/plugins/jquery-3.6.0.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bootstrap/bootstrap-3.4.1-dist/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/metisMenu/jquery.metisMenu.js'?>"></script>

</body>

</html>
