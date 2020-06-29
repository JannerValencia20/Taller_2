<?php
include('baseDatos.php');


//validar que se hizo clic en el boton consultar

if(isset($_POST["btnBuscar"])){

    //crear objetoo
    $operacion= new BaseDatos();
    
    //recibir los datos
    $nombre=$_POST["nomBuscar"];
    // echo($nombre);

     //crear consulta para agregar datos
     $consulta="SELECT nombre, correo, password FROM usuarios WHERE nombre='$nombre'";

    
     //utilizar el metodo consultarbasededatos para buscar en la base de datos

     $resul=$operacion->consultarEnBaseDatos($consulta);
    echo("<br>");
    print_r(json_encode($resul));
    
}else{
    echo("No has presionado el boton ENVIAR, no DEBES ESTAR EN ESTA PESTAÑA");
}

?>