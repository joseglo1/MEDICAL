		<!--  page-wrapper -->
      	<div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Personal Documents</h1>
                </div>
                <!--end page header -->
                <?php //print_r($nationalities);  ?>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            To approve your admission you must submit the following documents
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-10 align-content-center">
                                    <form role="form">
                                    	<div class="row">
                                    		<div class="form-group">
                                    			<div class="col-md-6">
	                                            	<label>Document</label>
	                                            	<select name="idDocument" class="form-control">
	                                            	<?php 
	                                            		$primero=0;
	                                            		foreach($documentload as $d) {
	                                            			if($d['Mandatory']) {
	                                            			$is_mandatory = " -Mandatory-";
	                                            			}
	                                            			else {
	                                            				$is_mandatory = " -Not Mandatory-";
	                                            			}

	                                                		if($primero==0) {
	                                                		$primero=1;

	                                                			echo "<option value=".$d['id_Document']." selected>".$d['Name']."<strong>".$is_mandatory."</strong></option>";
	                                                		}
	                                                		else {
	                                                			echo "<option value=".$d['id_Document'].">".$d['Name']."<strong>".$is_mandatory."</strong></option>";
	                                                		}
	                                                	}

                                                	?>	
                                            		</select>
                                            	</div>
	                                        </div>
	                                        <div class="col-md-6">
	                                            <label>Document</label>
	                                            <input class="form-control" type="file" name="DrDocument">
	                                        </div>
                                    	</div>
                                    	 <p>&nbsp;</p>
                                    	<div class="row">
                                    		<div class="form-group">
                                    			<div class="col-md-6">
                                    				<label>Notes</label>
                                    				<textarea name="notes" col="20" rows="5"></textarea>
                                    			</div>
                                    		</div>
                                    	</div>
                                    	 <p>&nbsp;</p>
                                    	<div class="row">
                                    		<div class="form-group">
		                                        <div class="col-md-6">
		                                            <input class="form-control btn-primary" type="submit" name="upload" value="UPLOAD">
		                                        </div>
		                                        <div class="col-md-6">
	                                            	<input class="form-control btn-danger" type="reset" name="CANCEL" value="CANCEL">
	                                            </div>
	                                        </div>
                                    	</div>

                                    </form>
                                </div> <!-- fin del contenido --> 
                            </div> <!-- fin del row -->
                        </div> <!-- Panel Body -->
                    </div> <!-- Panel Default -->
                </div> <!-- col-lg-12
            </div> <!-- FIN DEL ROW 
        </div>