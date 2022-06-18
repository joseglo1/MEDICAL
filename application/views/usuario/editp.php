<?php echo form_open('usuario/editp/'.$usuario['id_Usuario'],array("class"=>"form-horizontal")); ?>

	<div class="col-lg-8">
		<br>
		<?php
			$NombreCompania ="";
			$mycia= "SELECT * FROM compania WHERE id_Cia=".$usuario['id_Cia'].";";
			$querycia = $this->db->query($mycia);
			if ($querycia->num_rows() > 0)
			{
				$row = $querycia->row();
				$NombreCompania = $row->RazonSocial;
			}
			$myobra= "SELECT * FROM obras WHERE id_Obra=".$usuario['id_Obra'].";";
			$queryobra = $this->db->query($myobra);
			if ($queryobra->num_rows() > 0)
			{
				$row2 = $queryobra->row();
				$NombreObra = $row2->Nombre;
			}
			$myrol= "SELECT * FROM roles WHERE id_Rol=".$usuario['id_Rol'].";";
			$queryrol = $this->db->query($myrol);
			$NombreRol="";
			if ($queryrol->num_rows() > 0)
			{
				$row3 = $queryrol->row();
				$NombreRol = $row3->nombre;
			}
			$roles= "SELECT * FROM roles ORDER BY id_Rol;";
			$queryroles = $this->db->query($roles)->result_array();
		?>
		<div class="form-group">
			<label for="id_Cia" class="col-md-4 control-label">Compañia</label>
			<div class="col-md-8">
				<?php echo $NombreCompania; ?>
			</div>
		</div>
		<div class="form-group">
			<label for="id_Cia" class="col-md-4 control-label">Obra</label>
			<div class="col-md-8">
				<?php
				if($this->session->userdata("rolusuario")==1) 
				{
					$allobras= "SELECT * FROM obras WHERE id_Cia = ".$usuario['id_Cia'].";";
					$queryallobra = $this->db->query($allobras)->result_array();
					?>
					<select class="form-control" name="id_Obra">
					<?php
					foreach($queryallobra as $ob)
					{
					?>
						<option value="<?php echo $ob['id_Obra']?>" 
						<?php 
						if($ob['id_Obra']==$usuario['id_Obra'])
							echo "selected";
						?>
							><?php echo $ob['Nombre']?></option>
					<?php 
					}
				}
				else {
					echo $NombreObra;
				?>
					<input name="id_Obra" type='hidden' value="<?php echo $usuario['id_Obra'];?>">
				<?php } ?>
			</div>
		</div>
		
		<div class="form-group">
			<label for="Usuario" class="col-md-4 control-label">Usuario</label>
			<div class="col-md-8">
				<?php echo $usuario['Usuario']; ?>
				<input type="hidden" name="Usuario" value="<?php echo $usuario['Usuario']; ?>" required/> 
			</div>
		</div>

		<div class="form-group">
			<label for="id_Rol" class="col-md-4 control-label">Rol</label>
			<div class="col-md-8">
				<?php echo $NombreRol; ?>
			</div>
		</div>

		<div class="form-group">
			<label for="Nombre" class="col-md-4 control-label">Nombre de Usuario</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="Nombre" value="<?php echo $usuario['Nombre']; ?>"  id="Nombre" required/>
			</div>
		</div>

		<div class="form-group">
			<label for="Correo" class="col-md-4 control-label">Correo Electrónico</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="Correo" value="<?php echo $usuario['Correo']; ?>"  id="Correo" required/>
			</div>
		</div>
		
		<div class="form-group">
			<label for="UltimoFolio" class="col-md-4 control-label">Ultimo Folio</label>
			<div class="col-md-8">
				<input class="form-control" type="text" id="UltimoFolio" name="UltimoFolio" value="<?php echo $usuario['UltimoFolio']; ?>"  />
			</div>
		</div>
		<hr style="height:2px;border-width:0;color:gray;background-color:gray">
		<div class="form-group">
			<label for="PasswordNew" class="col-md-4 control-label">Cambiar Contraseña</label>
			<div class="col-md-8">
				<input class="form-control" type="password" id="PasswordNew" name="Password" placeholder="Cambio de Contraseña">
			</div>
		</div>
		<div class="form-group">
			<label for="PasswordNew2" class="col-md-4 control-label">Confirme Contraseña</label>
			<div class="col-md-8">
				<input class="form-control" type="password" id="PasswordNew2" name="Password2" placeholder="Confirmar Contraseña" onblur="cambiopass()">
			</div>
		</div>
		<hr style="height:2px;border-width:0;color:gray;background-color:gray">
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
				<button type="submit" class="btn btn-success">ACTUALIZAR</button>
	        </div>
		</div>
	</div>
	<?php echo form_close(); ?>
	<script>
		function cambiopass() {
  		var pass1 = document.getElementById("PasswordNew").value;
  		var pass2 = document.getElementById("PasswordNew2").value;
  		if(pass1 != pass2)
  			alert("Contraseñas no coinciden");
		}
	</script>