<?php 


include('baseDatos.php');

//Validar que se hizo clic en el boton de enviar datos
if(isset($_POST["btnEnviar"])){
    
    //recibir los datos a enviar
    $nombre=$_POST["nomUsuario"];
    $email=$_POST["correoUsuario"];
    $password=$_POST["contraseña"];
   
    //1. crear un objeto del tipo BaseDatos 
        $operacion= new BaseDatos();
    
        // $operacion-> conectarConBaseDatos();

    //2. Creemos una consulta para agregar datos
$consulta = "INSERT INTO usuarios(nombre, correo, password) VALUES ('$nombre', '$email', '$password')";
    
//  //3. utilizar el metodo alterarBaseDatos para poder ejecutar la consulta para ello utilizamos el objeto del paso 1 
 
$resul= $operacion->alterarBaseDatos($consulta);

//verifica si estan los datos 
if($resul){
echo("<br>");
    echo("Registro Exitoso");

}else{
    die("Error del registro");
}
}else{
    echo("No has presionado el boton ENVIAR, no DEBES ESTAR EN ESTA PESTAÑA");

}


?>

