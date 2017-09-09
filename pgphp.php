<html>
  <head>
  <head>
  <body>
     <?php

        // DATOS
        $nombre=$_POST['NOMBRE'];
        $apellido=$_POST['apellido'];
        if ($_POST['sexo']=="masculino") {
        #  code...
          $sexo="hombre";
        }else {
          # code...
          $sexo="mujer";
        }

        function Coneccion()
        {
            if (!($link=mysql_connect("pc01","usu","Pass123")))
            {
               echo "Error! al conectar a la base de datos.";
               exit();
            }

            if (!mysql_select_db("practica",$link))
            {
               echo "Error! nombre incorrecto base de datos.";
               exit();
            }
            return $link;
        }
     ?>
    <h1>Pagina PHP</h1>
    <?php
                //funcion coneccion
                $link=Conectarse();
                echo "Conexión con la base de datos. ";

                //Agregar datos a la Base
                mysql_query("insert into usuario (Nombre,Apellidos) values ('$nombre','$apellidos')",$link);
                echo $nombre," ",$apellido,"-",$sexo," se agregado a la base";
                mysql_close($link); //cierra la conexion
     ?>
  </body>
</html>
