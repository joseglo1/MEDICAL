<?php //echo form_open('doctor/signup',array("class"=>"form-horizontal")); ?>
<form action="<?php echo base_url().'/doctor/signup';?>" method="post" enctype="multipart/form-data">
		<!--  page-wrapper -->
      	<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
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
                                            <div class="col-md-9">
                                                <label>Specialist - Press Ctrl for 2 or more selections-</label>
                                                <select name="idSpecialist[]" class="form-control" multiple="multiple">
                                                <?php 
                                                	$primero=0;
                                                	foreach($specialities as $s) {
                                                    	if($primero==0) {
                                                    		$primero=1;
                                                    		echo "<option value='".$s['id_Specialist']."' selected>".$s['name']."</option>";
                                                    	}
                                                    	else {
                                                    		echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                                                    	}
                                                    }

                                                ?>	
                                            	</select>
                                                
                                            </div>
                                            <div class="col-md-3">
                                            	<label>Years of Experience</label>
                                            	<input class="form-control" name="ExperienceYears" type="number" min="1" max="55" required />
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <label>Language</label>
                                                <select name="idLanguage[]" class="form-control" multiple="multiple">
                                                <?php
                                                 $primero=0;
                                                 foreach($languages as $l) {
                                                  if($primero==0) {
                                                  	$primero = 1;
                                                  	echo "<option value='".$l['id_Language']."' selected>".$l['name']."</option>";
                                                  }
                                                  else
                                                  {
                                                  	echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";
                                                  }
                                                 }
                                                 ?>
                                            	</select>
                                                
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Stream Tool</label>
                                            	<select name="idStreamTool" class="form-control" multiple="multiple">
                                            	 <?php
                                                 $primero=0;
                                                 foreach($stream as $st) {
                                                  if($primero==0) {
                                                  	$primero = 1;
                                                  	echo "<option value='".$st['id_Stream_Tool']."' selected>".$st['Name']."</option>";
                                                  }
                                                  else
                                                  {
                                                  	echo "<option value='".$st['id_Stream_Tool']."'>".$st['Name']."</option>";
                                                  }
                                                 }
                                                 ?>
                                                	<option value="Zoom" selected>Zoom</option>
                                                	<option value="GoogleMeet">GoogleMeet</option>
                                            	</select>
                                            </div>
                                    	</div>
                                    </div>
                                	 <p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-12">
                                            	<label>About Me</label>
                                            	<textarea name="Resum" col="25" rows="5" class="form-control" require>A brief description about you</textarea>
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                	<div class="form-group">
                                        <div class="col-md-6">
                                            <input class="form-control btn-primary" type="submit" name="send" value="SEND">
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
        </div>
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