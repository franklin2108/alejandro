<?php
    include 'conex/conexion.php';
      
      $cedula     = $_POST['ced_user'];
      $nombre     = $_POST['nom_user'];
      $correo     = $_POST['email_user'];
      $telefono   = $_POST['tel_user'];
      $pass       = $_POST['pass_user'];
      $direc      = $_POST['dir_user'];
      $img        =$_POST ['imagen']
      
      $estado     = true; 

        $consultar = "select * from usuarios where ced_user = '$cedula'";
        $conv_consultar = mysqli_query($cnx,$consultar);
        $v = mysqli_num_rows($conv_consultar);
        if($v > 0){
  
          /*echo "<button class='btn waves-effect green accent-4 center-align'>Ya existe un registro con la C&eacute;dula: '$cedula'!</button>";*/
    
        }else{
          if ($estado == true) {

            $sql = "insert into pacientes (`ced_user`, `nom_user`,`email_user`,`tel_user`, `pass_user` ,`dir_user` ) values ('".$cedula."','".$nombre."','".$correo."','".$telefono."','".$pass."','".$direc."')";
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

      if ($_FILES["imagen"]["error"] > 0){
      echo "ha ocurrido un error";
    } else {
      //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
      //y que el tamano del archivo no exceda los 100kb
      $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
      $limite_kb = 100;

      if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
        //esta es la ruta donde copiaremos la imagen
        //recuerden que deben crear un directorio con este mismo nombre
        //en el mismo lugar donde se encuentra el archivo subir.php
        $ruta = "imagenes/" . $_FILES['imagen']['name'];
        //comprobamos si este archivo existe para no volverlo a copiar.
        //pero si quieren pueden obviar esto si no es necesario.
        //o pueden darle otro nombre para que no sobreescriba el actual.
        if (!file_exists($ruta)){
          //aqui movemos el archivo desde la ruta temporal a nuestra ruta
          //usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
          //almacenara true o false
          $resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
          if ($resultado){
            $nombre = $_FILES['imagen']['name'];
            @mysql_query("INSERT INTO imagenes (imagen) VALUES ('$img')") ;
            echo "el archivo ha sido movido exitosamente";
          } else {
            echo "ocurrio un error al mover el archivo.";
          }
        } else {
          echo $_FILES['imagen']['name'] . ", este archivo existe";
        }
      } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
      }
    }
?>