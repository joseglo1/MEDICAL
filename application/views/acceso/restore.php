<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Restore Password</title>
    <?php
        //echo link_tag('css/bootstrap.min.css');
        //echo link_tag('css/metisMenu.min.css');
        //echo link_tag('css/startmin.css');
        //echo link_tag('css/font-awesome.min.css');
    ?>
    <style>
      @use postcss-preset-env {
        stage: 0;
      }
    /* ---------- GENERAL ---------- */
    * {
      box-sizing: inherit;
      }

      html {
        box-sizing: border-box;
      }

      body {
        background-color: #c0c0c0;
        background-image: url('<?php echo base_url(); ?>assets/img/login_user.jpg');
        font-family: 'Varela Round', sans-serif;
        line-height: 1.5;
        margin: 0;
        min-block-size: 100vh;
        padding: 5vmin;
      }

      h2 {
        font-size: 1.75rem;
      }

      input {
        background-image: none;
        border: none;
        font: inherit;
        margin: 0;
        padding: 0;
        transition: all 0.3s;
      }

      svg {
        height: auto;
        max-width: 100%;
        vertical-align: middle;
      }

      /* ---------- ALIGN ---------- */
      .align {
        display: grid;
        place-items: center;
      }

      /* ---------- BUTTON ---------- */

      .button {
        background-color: #33cc77;
        color: #fff;
        padding: 0.25em 1.5em;
      }

      .button:focus,
      .button:hover {
        background-color: #28ad63;
      }

      /* ---------- ICONS ---------- */
      .icons {
        display: none;
      }

      .icon {
        fill: currentcolor;
        display: inline-block;
        height: 1em;
        width: 1em;
      }

      /* ---------- LOGIN ---------- */
      .login {
        width: 400px;
      }

      .login__header {
        background-color: #f95252;
        border-top-left-radius: 1.25em;
        border-top-right-radius: 1.25em;
        color: #fff;
        padding: 1.25em 1.625em;
      }

      .login__header :first-child {
        margin-top: 0;
      }

      .login__header :last-child {
        margin-bottom: 0;
      }

      .login h2 .icon {
        margin-right: 14px;
      }

      .login__form {
        background-color: #fff;
        border-bottom-left-radius: 1.25em;
        border-bottom-right-radius: 1.25em;
        color: #777;
        display: grid;
        gap: 0.875em;
        padding: 1.25em 1.625em;
      }

      .login input {
        border-radius: 0.1875em;
      }

      .login input[type="text"],
      .login input[type="email"],
      .login input[type="password"] {
        background-color: #eee;
        color: #777;
        padding: 0.25em 0.625em;
        width: 100%;
      }

      .login input[type="submit"] {
        display: block;
        margin: 0 auto;
      }
    </style>

  </head>
  <body class="align">
    <div class="login">
      <header class="login__header">
        <h2>
          <svg class="icon">
            <use xlink:href="#icon-lock" />
          </svg>Restore Password
        </h2>
      </header>

      <?php echo form_open('acceso/genpass',array("class"=>"form-horizontal")); ?>
      <div class="login__form">
        <div>
          <label for="Email"><strong>Email</strong></label>
          <br>
          <input type="email" id="email" name="Email" placeholder="">
        </div>
        
        <p><em>You will receive a new password in your email </em></p>
        <div>
          <input class="button" type="submit" value="SEND">
        </div>
        <div>
          <center><a href="<?php echo base_url();?>">Back</a></center>
        </div>
      </div>
      <?php echo form_close(); ?>

    </div>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">

      <symbol id="icon-lock" viewBox="0 0 448 512">
        <path d="M400 224h-24v-72C376 68.2 307.8 0 224 0S72 68.2 72 152v72H48c-26.5 0-48 21.5-48 48v192c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V272c0-26.5-21.5-48-48-48zm-104 0H152v-72c0-39.7 32.3-72 72-72s72 32.3 72 72v72z" />
      </symbol>

    </svg>
      <!-- jQuery -->
      <!-- <script src="../js/jquery.min.js"></script> -->
      <script src="<?php echo link_tag('js/jquery.min.js');?>"></script>
      <script src="<?php echo link_tag('js/bootstrap.min.js');?>"></script>
      <script src="<?php echo link_tag('js/metisMenu.min.js');?>"></script>
      <script src="<?php echo link_tag('s/startmin.js');?>"></script>
      <!-- Bootstrap Core JavaScript --
      <script src="../js/bootstrap.min.js"></script>
      -- Metis Menu Plugin JavaScript 
      <script src="../js/metisMenu.min.js"></script>
      -- Custom Theme JavaScript -
      <script src="../js/startmin.js"></script> -->
    </body>
</html>
