<?php 
  include_once("../controller/empleado/get/index.php");
 ?>
<div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Lista de empleados</h6>
            </div>
            <div class="card-body">
              
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 57px;">
                      <i class="fas fa-user"></i> &nbsp;Nombre
                    </th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 62px;">
                    <i class="fas fa-at"></i> &nbsp;Email
                  </th>
                  <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 50px;">
                  <i class="fas fa-venus-mars"></i> &nbsp;Sexo
                </th>
                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 31px;">
                <i class="fas fa-briefcase"></i>&nbsp;Area
              </th>
              <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">
              <i class="fas fa-envelope"></i>&nbsp;Boletín
            </th>
             <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">
              Modificar
            </th>
             <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 68px;">
              Eliminar
            </th>
            
        </tr>
                  </thead>
                  
                  <tbody>
                    
                  <?php

                  foreach ($datos as $da) {
                    echo '<tr role="row" class="even">
                      <td class="sorting_1">'.$da['nombre'].'</td>
                      <td>'.$da['email'].'</td>
                      <td>';
                      if($da['sexo']=="f"){
                        echo "Femenino";
                        }else{
                          echo "Masculio";
                        }
                        echo '</td>
                      <td>';
                      foreach ($areas as $a) {
                        if($da['area_id']==$a['id']){
                          echo $a['nombre'];
                        }
                      }
                     
                      
                      echo '</td>
                      <td>';
                      if($da['boletin']==1){
                        echo "Si";
                      }else{
                        echo "No";
                      }
                      echo'</td>
                      <td><a data-url="../controller/empleado/get/editar.php" data-id="'.$da['id'].'"class="edi"><i class="fas fa-edit"></i></a></td>
                      <td><a data-url="../controller/empleado/post/eliminar.php"data-id="'.$da['id'].'"class="elim"><i class="fas fa-trash-alt"></a></i></td>
                    </tr>
';
                  }
                  ?>  
                  
                  </tbody>
                </table>
              </div>
              
                </div>
              </div>
            </div>
          </div>
          