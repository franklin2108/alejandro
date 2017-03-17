 <?php
  
      $nombre     = $_POST['nom_pac'];
      $apellido   = $_POST['ap_pac'];
      $telefono   = $_POST['tel_pac'];
      $cedula     = $_POST['ced_pac'];
      $pass       = $_POST['pass'];
      $estado     = true; 

        $consultar = "select * from pacientes where ced_paciente = '$cedula'";
        $conv_consultar = mysqli_query($cnx,$consultar);
        $v = mysqli_num_rows($conv_consultar);
        if($v > 0){
  
          /*echo "<button class='btn waves-effect green accent-4 center-align'>Ya existe un registro con la C&eacute;dula: '$cedula'!</button>";*/
    
        }else{
          if ($estado == true) {

            $sql = "insert into pacientes (`nom_paciente`, `ape_paciente`,`tel_paciente`,`ced_paciente`, `pass`) values ('".$nombre."','".$apellido."','".$telefono."','".$cedula."','".$pass."')";
            $conv_sql = mysqli_query($cnx,$sql);
              if($conv_sql){

                echo "<button class='btn waves-effect green accent-4 center'>Registrado con Exito</button>";
              }
              else{
                echo "<button class='btn waves-effect  orange darken-3>No est&aacute; Registrado</button>";
              }
            
          }else{  
            echo "<button class='btn waves-effect  red darken-4 '><h3>No se puede Registrar</h3></button>";
          }
          
        }


    ?>

