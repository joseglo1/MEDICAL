<?php echo form_open('doctor/probando2/',array("class"=>"form-horizontal")); ?>

	<div class="col-lg-8">
		<br>
		<div class="form-group">
			<label for="id_Cia" class="col-md-4 control-label">Nombre</label>
			<div class="col-md-8">
				<input class="form-control" name="NameDr" type="text" required />
			</div>
		</div>

		<div class="form-group">
			<label for="id_Cia" class="col-md-4 control-label">Email</label>
			<div class="col-md-8">
				<input class="form-control" name="email" type="text" required />
			</div>
		</div>
		
		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-success">ACTUALIZAR</button>
	        </div>
		</div>
	</div>
	
<?php echo form_close(); ?>