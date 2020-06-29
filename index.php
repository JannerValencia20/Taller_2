<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=initial-scale=1.0">
    <title>janner </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

<body class = " bg-dark text-white ">
<header>
<h1 class = " text-center mt-5"> Registro Aquí</h1>
</header>

<main>

<div class = " container ">
  <div class = " row justify-content-center ">
    <div  class = " col-4 ">



    <form action="agregarDatos.php" method="POST">
                    <div class="form-group">
                        <label for="nomUsuario">Nombre Completo</label>
                        <input type="text" class="form-control" id="nomUsuario" name="nomUsuario">
                    </div>
                    
                    <div class="form-group">
                        <label for="correoUsuario">Correo Electronico</label>
                        <input type="text" class="form-control" id="correoUsuario" name="correoUsuario">
                    </div>
                    <div class="form-group">
                        <label for="passUsuario">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña">
                    </div>
                    <button type="submit" class="btn btn-success btn-block" id="btnEnviar" name="btnEnviar"> Enviar</button>
                </form>
                <form action="consulDatos.php" method="POST" class="mt-5 mb-5">
                    <div class="form-group">
                        <label for="nomBuscar">Buscar Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="nomBuscar" name="nomBuscar">
                    </div>
                    <button type="submit" class="btn btn-info btn-block" id="btnBuscar" name="btnBuscar">Buscar</button>
                </form>
                <form action="eliminarDatos.php" method="POST" class="mt-5 mb-5">
                    <div class="form-group">
                        <label for="nombreEliminar">Eliminar Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="nombreEliminar" name="nombreEliminar">
                    </div>
                    <button type="submit" class="btn btn-danger btn-block" id="btnEliminar" name="btnEliminar">Eliminar</button>
                </form>
                
                
                </div>
                    
</div>
</div>

</main>
<footer>
    </footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="alerta.js"></script>
</body>
</html>
