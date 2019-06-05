
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Editar empleado </title>

  <!-- Custom fonts for this template-->
  <link href="../../web/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../../web/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Editar empleado</h1>
              </div>
              <hr>
              <form class="user" method="post" action="../controller/empleado/post/editarPost.php">
              <?php
                    foreach($usu as $us){

                    
              ?>
              <input type="hidden" name="id" value="<?php echo $us['id']?>">
                
                <div class="form-group row">
                  <div class="col-sm-5 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="nombre"id="exampleFirstName" placeholder="<?php echo $us['nombre'] ?>" value="<?php echo $us['nombre']?>">
                  </div>
                  <div class="col-sm-5">
                    <input type="text" class="form-control form-control-user"  value="<?php echo $us['email']?>" name="email"id="exampleLastName" placeholder="<?php echo $us['email']?>" >
                  </div>
                </div>
                    <!--radio-->

                    <div class="form-group row">
                                         
                                            <label>Sexo *</label>&nbsp;&nbsp;&nbsp;
                                            <?php
                                            if($us['sexo']=="m"){
                                                ?>
                                                  <div class="form-check-inline">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="genero" value="m"checked>Masculino
                                                </label>
                                                </div>
                                                <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="genero" value="f">Femenino
                                                </label>
                                                </div>
                                                <?php
                                            }else{
                                                ?>
                                                 <div class="form-check-inline">
                                                  <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="genero" value="m">Masculino
                                                </label>
                                                </div>
                                                <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" class="form-check-input" name="genero" value="f"checked>Femenino
                                                </label>
                                                </div>
                                                
                                                <?php
                                            }
                                            ?>
                          
                        
                        
                    </div>



                      
                    <!--Fradio-->
                    <!--- selec-->
                <div class="form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                  Area * <select class="form-control" id="sel1" name="area">
                        
                    <?php
                        foreach($datos as $da){
                            if($da['id']==$us['area_id']){
                                echo "<option value='".$da['id']."'>".$da['nombre']."</option>";
                            }
                        }
                        foreach($datos as $da){

                        echo "<option value='".$da['id']."'>".$da['nombre']."</option>";
                      }
                    ?>
      </select>
    </div>
                </div>
<!--- Fselec-->

<!---textarea-->
                      
                      <div class="form-group">
                         <div class="col-sm-6 mb-3 mb-sm-0">
                          <label for="comment">Descripcion:</label>
                            <textarea class="form-control" rows="5" id="comment" name="des" values="<?php echo $us['descripcion']?>">
                            <?php echo $us['descripcion']?>
                            </textarea>
                        </div>
                  
                </div>

                <!--Ftextarea-->
                <div clas="form-group">
                  

                </div>
                                        <div class="form-check">
                          <label class="form-check-label">
                          <?php
                                if($us['boletin']==1){
                                    ?>
                                    <input type="checkbox" class="form-check-input" value="1" name="op" checked>Deseo recibir boletín informativo
                                <?php
                                }else{
                                    ?>
                                    <input type="checkbox" class="form-check-input" value="1" name="op">Deseo recibir boletín informativo
                                    <?php
                                }
                          ?>
                            
                          </label>
                        </div><br><br>
                        <label>Roles *</label>

                        <?php
                        echo "<br>Roles existentes";
                         foreach($roles as $rol){
                            echo "<div class='form-check'>
                            <label class='form-check-label'>
                              <input type='checkbox' class='form-check-input' name='rol[]'value='".$rol['id']."'>".$rol['nombre']."
                            </label>
                          </div>";
                        }
                        echo "<hr>";
                        echo "Roles a los que pertenece";
                            foreach($emp_rol as $em){
                                foreach( $roles as $rol ){
                                    $valor=$rol['id'];
                                    if(in_array($valor,$em)){
                                        echo "<div class='form-check'>
                                        <label class='form-check-label'>
                                          <input type='checkbox' class='form-check-input' name='rol[]'value='".$rol['id']."'checked>".$rol['nombre']."
                                        </label>
                                      </div>";
                                    }
                                }
                                
                            
                            }
                           
                                ///////////////
                           
                          
                    
                        ?>
                        


                <!--chechk-->


                <!--Fchechk-->
              <br>
              <br>
              <br>
                <input type="submit" value="Editar" class="btn btn-primary btn-user btn-block ">
                <input type="button" value="Atras" class="btn btn-success btn-user btn-block atras">
                  
                <?php
}
                ?>
              </form>
              <hr>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../../web/vendor/jquery/jquery.min.js"></script>
  <script src="../../web/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../web/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../web/js/sb-admin-2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script>
  $(document).ready(function(){
      $(".atras").click(function(){
        location.reload(true);
      });
  });
  </script>

</body>

</html>
