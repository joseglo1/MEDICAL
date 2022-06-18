<?php echo form_open('usuario/edit/'.$usuario['id_Usuario'],array("class"=>"form-horizontal")); ?>

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
				<?php echo $NombreObra; ?>
			</div>
		</div>
		
		<div class="form-group">
			<label for="Usuario" class="col-md-4 control-label">Usuario</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="Nombre" value="<?php echo $usuario['Usuario']; ?>"  id="Usuario" / required>
			</div>
		</div>

		<div class="form-group">
			<label for="Correo" class="col-md-4 control-label">Correo Electrónico</label>
			<div class="col-md-8">
				<input class="form-control" type="text" name="Correo" value="<?php echo $usuario['Correo']; ?>"  id="Correo" required/>
			</div>
		</div>
		<div class="form-group">
			<label for="id_Rol" class="col-md-4 control-label">Rol</label>
			<div class="col-md-8">
				<select name="id_Rol" class="form-control">

					<?php
					//print_r($queryroles);
					foreach($queryroles as $ro)
					{
						if($ro['id_Rol']==$usuario['id_Rol'])
						{ ?>
							<option value="<?php echo $ro['id_Rol']?>"selected><?php  echo $ro['nombre'] ?></option>
						<?php
						}
						else
						{  ?>
							<option value="<?php echo $ro['id_Rol']?>"><?php echo $ro['nombre'] ?></option>
						<?php
						}
					}
				?>
			-->
				</select>
			</div>
		</div>
		<div class="form-group">
			<label for="UltimoFolio" class="col-md-4 control-label">Ultimo Folio</label>
			<div class="col-md-8">
				<input class="form-control" type="text" id="UltimoFolio" name="UltimoFolio" value="<?php echo $usuario['UltimoFolio']; ?>"  />
			</div>
		</div>
		<br>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-4">
				<button type="submit" class="btn btn-success">ACTUALIZAR</button>
	        </div>
		</div>
	</div>
	<?php echo form_close(); ?>