<?php echo form_open('usuario/add',array("class"=>"form-horizontal")); ?>
	
	<div class="col-lg-8">
		<br>
		<div class="form-group">
			<label for="id_Cia" class="col-md-4 control-label">Compania</label>
			<div class="col-md-6">
				<!--
				<select class="form-control" name="id_Cia"> -->
				<?php
				
					//$query = "SELECT * FROM compania ORDER BY id_Cia;";
					//$resultado = $this->db->query($query)->result_array();
					//foreach($resultado as $cia) { ?>
						<!--<option value="<?php //echo $cia['id_Cia'];?>"><?php //echo $cia['RazonSocial'];?></option>";
						-->
				<?php
					//}
				?>
				<!-- </select>  -->
				<input type="hidden" name="id_Cia" value="<?php echo $this->session->userdata('myworkcia');?>">
				<?php 
				echo $this->session->userdata('nomcia'); ?>
			</div>
		</div>
		<div class="form-group">
			<label for="id_Obra" class="col-md-4 control-label">Obra</label>
			<div class="col-md-6">
				<select class="form-control" name="id_Obra">
				<?php
					$queryo = "SELECT * FROM obras WHERE id_Cia = ".$this->session->userdata('myworkcia')." and Baja = 0 ORDER BY Nombre;";
					$resultadoo = $this->db->query($queryo)->result_array();
					foreach($resultadoo as $obra) { ?>
						<option value="<?php echo $obra['id_Obra'];?>"><?php echo $obra['Nombre'];  ?></option>";
					<?php
					}
				?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="Usuario" class="col-md-4 control-label">Usuario</label>
			<div class="col-md-6">
				<input type="text" name="Usuario" class="form-control" id="Usuario" / required>
			</div>
		</div>

		<div class="form-group">
			<label for="id_Rol" class="col-md-4 control-label">Rol</label>
			<div class="col-md-6">
				<select name="id_Rol" class="form-control">
				<?php
					$roles = "SELECT * FROM roles ORDER BY id_Rol;";
					$result = $this->db->query($roles)->result_array();
					foreach($result as $rol) {
						echo "<option value='".$rol['id_Rol']."'>".$rol['nombre']."</option>";
					}
				?>
				</select>
			</div>
		</div>

		<div class="form-group">
			<label for="Password" class="col-md-4 control-label">Contraseña</label>
			<div class="col-md-6">
				<input type="password" name="Password" class="form-control" id="Password" />
			</div>
		</div>

		<div class="form-group">
			<label for="Nombre" class="col-md-4 control-label">Nombre</label>
			<div class="col-md-6">
				<input type="text" name="Nombre" class="form-control" id="Nombre" required />
			</div>
		</div>

		<div class="form-group">
			<label for="Correo" class="col-md-4 control-label">Correo Electrónico</label>
			<div class="col-md-6">
				<input type="text" name="Correo" class="form-control" id="Correo" required />
			</div>
		</div>

		
		<div class="form-group">
			<label for="UltimoFolio" class="col-md-4 control-label">Ultimo Folio</label>
			<div class="col-md-6">
				<input type="text" name="UltimoFolio" class="form-control" id="UltimoFolio" />
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-offset-4 col-sm-8">
				<button type="submit" class="btn btn-success">AGREGAR</button>
	    </div>
	  </div>
	</div>
<?php echo form_close(); ?>