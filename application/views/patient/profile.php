<?php //echo form_open('doctor/signup',array("class"=>"form-horizontal")); ?>

		<!--  page-wrapper -->
      	<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Patient</h1>
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
                        <form action="<?php echo base_url().'/patient/updatefoto';?>" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                	<div class="form-group">
                                    	<div class="col-md-3">
                                        	<?php

                                            $urlimage=site_url().'upload/profile/patient/'.$patient[0]['picture'];

                                            if($patient[0]['picture']<>'') {
                                            ?>
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url().'upload/profile/patient/'.$patient[0]['picture'];?>" height="150px" weight="150px" alt="">
                                            <?php
                                            } else { ?>
                                            <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo base_url(); ?>upload/icono_perfil.png" height="150px" weight="150px" alt="">
                                            <?php 
                                            } ?>
                                            <input type="hidden" name="idpatient" value="<?php echo $patient[0]['id_Patient'];  ?>">       
                                    	</div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label>Upload Your Profile Image  gif | jpg | png | jpeg </label>
                                            <input class="form-control" name="mydocument" value="<?php echo $patient[0]['picture'];?>" type="file" required />
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
                            <h3>PATIENT DATA</h3>
                        </div>
                        <form action="<?php echo base_url().'/patient/update';?>" method="post" enctype="multipart/form-data">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                    <div class="row">
                                    	<div class="form-group">
                                        	<div class="col-md-6">
                                                <input type="hidden" name="idpatient" value="<?php echo $patient[0]['id_Patient'];  ?>">
                                            	<label>First Name</label>
                                            	<input class="form-control" name="NameDr" value="<?php echo $patient[0]['First_Name'];?>" type="text" required />
                                            	<p class="help-block"></p>
                                        	</div>
                                        	<div class="col-md-6">
                                            	<label>Middle Name</label>
                                            	<input class="form-control" name="MiddleName" value="<?php echo $patient[0]['Middle_Name'];?>" type="text" required />
                                            	<p class="help-block"></p>
                                        	</div>
                                        </div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                                <input class="form-control" name="LastName" value="<?php echo $patient[0]['Last_Name'];?>" type="text" required />
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Gender</label>
                                            	<select name="Gender" class="form-control">
                                                    <option value="<?php echo $patient[0]['Gender'];?>" selected><?php echo $patient[0]['Gender'];?></option>
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
                                                    $idmarital = $patient[0]['id_Marital_Status'];
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
                                                    $idnat = $patient[0]['id_Nationality'];
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
                                                <input class="form-control" name="DateBirth" value="<?php echo $patient[0]['Date_Birth'];?>" type="date" required />
                                                
                                            </div>
                                            <div class="col-md-6">
                                                <?php 
                                                $idsLan = explode('|',$patient[0]['id_Language']);
                                                $lon = count($idsLan);
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
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <?php 
                                                echo "<label>SMOKE?</label>";
                                                echo "<select name='smoke' class='form-control'>";
                                                if ($patient[0]['Smoker']==1) 
                                                {
                                                     echo "<option value='1' selected>YES</option>";
                                                     echo "<option value='0'>NO</option>";
                                                }
                                                else 
                                                {
                                                    echo "<option value='0' selected>NO</option>";
                                                    echo "<option value='1'>YES</option>";
                                                }
                                            	echo "</select>";
                                                ?>  
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Phone Number</label>
                                            	<input class="form-control" name="phonenumber" value="<?php echo $patient[0]['Phone_Number'];?>" type="text" required/>
                                            </div>
                                    	</div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                                <label>Height</label>
                                                <input class="form-control" name="height" value="<?php echo $patient[0]['Height'];?>" type="number" step="0.01" required/>
                                                <label>Weight</label>
                                                <input class="form-control" name="weight" value="<?php echo $patient[0]['Weight'];?>" type="number" step="0.01" required/>
                                            </div>
                                            <div class="col-md-6">
                                                <?php 
                                                    echo "<label>You Have a Chronic Disease</label>";
                                                    echo "<select name='chronicdesease' class='form-control'>";
                                                    if ($patient[0]['Chronic_Desease']==1) 
                                                    {
                                                        echo "<option value='1' selected>YES</option>";
                                                        echo "<option value='0'>NO</option>";
                                                    }
                                                    else 
                                                    {
                                                        echo "<option value='0' selected>NO</option>";
                                                        echo "<option value='1'>YES</option>";
                                                    }
                                                    echo "</select>";
                                                ?>  
                                            </div>
                                    	</div>
                                    </div>
                                	<p>&nbsp;</p>
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="col-md-6">
                                                <label>Notes of Chronic Desease</label>
                                            	<textarea name="noteschronicdesease" col="25" rows="5" class="form-control" require><?php echo $patient[0]['Note_Chronic_Desease'];?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                            	<label>Family Desease History</label>
                                            	<textarea name="familydeseasehistory" col="25" rows="5" class="form-control" require><?php echo $patient[0]['Family_Desease_History'];?></textarea>
                                            </div>
                                    	</div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <label>Email</label>
                                                <input class="form-control" name="email" value="<?php echo $patient[0]['Email'];?>" required/>
                                        </div>
                                    	<div class="form-group">
                                            <div class="col-md-6">
                                            	
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