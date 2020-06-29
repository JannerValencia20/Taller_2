<?php


include('baseDatos.php');

if(isset($_POST["btnEliminar"]))
{


 //crear objetoo
$operacion= new baseDatos();

 //recibir los datos
 $nombre=$_POST["nomEliminar"];

 //crear consulta para eliminar datos
 $consulta="DELETE FROM usuarios WHERE nombre='$nombre'";

//utilizar el metodo alterarbasededatos para eliminar datos en la base de datos

$resul=$operacion->alterarbaseDatos($consulta);

}else{
    echo("No has presionado el boton ENVIAR, no DEBES ESTAR EN ESTA PESTAÑA");
}

?>
