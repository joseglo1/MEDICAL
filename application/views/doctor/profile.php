<?php //echo form_open('doctor/signup',array("class"=>"form-horizontal")); ?>

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
                                            <div class="col-md-9">
                                                <?php //echo $doctor[0]['id_Specialist']." ";
                                                $idsSpe = explode('|',$doctor[0]['id_Specialist']);
                                                //print_r($idsSpe);
                                                $lon = count($idsSpe);
                                                $this->load->model('Specialist_model');
                                                ?>
                                                <label>Specialist - Press Ctrl for 2 or more selections-</label>
                                                <select name="idSpecialist[]" class="form-control" multiple="multiple">
                                                <?php 
                                                    foreach($idsSpe as $idss) {

                                                     $espec = $this->Specialist_model->get_specialist($idss);
                                                     echo "<option value='".$espec['id_Specialist']."' selected>".$espec['name']."</option>";

                                                    }
                                                	
                                                	foreach($specialities as $s) {
                                                    	echo "<option value='".$s['id_Specialist']."'>".$s['name']."</option>";
                                                    }

                                                ?>	
                                            	</select>
                                                
                                            </div>
                                            <div class="col-md-3">
                                            	<label>Years of Experience</label>
                                            	<input class="form-control" name="ExperienceYears" value="<?php echo $doctor[0]['Experience_Years'];?>" type="number" min="1" max="55" required />
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <?php //echo $doctor[0]['id_Language']." ";
                                                $idsLan = explode('|',$doctor[0]['id_Language']);
                                                //print_r($idsSpe);
                                                $lon = count($idsLan);
                                                $this->load->model('Specialist_model');
                                                ?>
                                                <label>Language</label>
                                                <select name="idLanguage[]" class="form-control" multiple="multiple">
                                                <?php
                                                
                                                 foreach($idsLan as $idla) {

                                                     $languag = $this->Language_model->get_language($idla);
                                                     echo "<option value='".$languag['id_Language']."' selected>".$languag['name']."</option>";

                                                    } 
                                                 foreach($languages as $l) {
                                                  	echo "<option value='".$l['id_Language']."'>".$l['name']."</option>";
                                                  }
                                                 ?>
                                            	</select>
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <?php //echo $doctor[0]['id_Stream_Tool']." ";
                                                $idsTool = explode('|',$doctor[0]['id_Stream_Tool']);
                                                //print_r($idsTool);
                                                $lon = count($idsLan);
                                                $this->load->model('Specialist_model');
                                                ?>
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