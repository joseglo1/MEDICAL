          <!-- /.panel-heading -->
                <div class="panel-body">
                  <div class="table-responsive">
                    <div>
                      <p><a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-info">AGREGAR</a>
                      <a href="javascript:imprSelec('seleccion')" class="btn btn-warning">IMPRIMIR</a>
                      </p>
                    </div>
                    <div id="seleccion"> <!-- IMPRESION -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                        <tr>
                          <th>Accion</th>
                          <th>Nombre</th>
                          <th>Compañia</th>
                          <th>Obra</th>
                          <th>Rol</th>     
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        //print_r($usuario);
                        foreach($usuarios as $u){
                        if($u['Baja']==1) continue;
                        if($u['id_Cia']!=$this->session->userdata('myworkcia')) continue;

                         ?>
                        <tr class="odd gradeX">
                          <td class="center"><a href="<?php echo site_url('usuario/editp/'.$u['id_Usuario']); ?>" class="fa fa-pencil fa-fw" title="Editar"></a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['id_Usuario']); ?>" class="fa fa-trash fa-fw" title="Eliminar"></a></td>
                          <td><?php echo $u['Nombre']; ?></td>
                          <td><?php echo $u['NCia']; ?></td>
                          <td class="center"><?php echo $u['NObra']; ?></td>
                          <td class="center"><?php echo $u['NRol']; ?></td>
                          
                        </tr>
                      <?php } ?> 
                        
                        </tbody>
                    </table>
                  </div> <!-- FIN DE IMPRESION -->
                  </div>
                </div>