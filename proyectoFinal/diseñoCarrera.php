<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title></title> 
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
 <link rel="stylesheet" href="estilos.css">
</head>  
<body>
    <form class="formulario" method="get" action="carreraInsertar.php">
    <h1>Agrega los datos de la Carrera</h1>
     <div class="contenedor">

         <div class="input-contenedor text-center">
            <i class="bi bi-mortarboard icon"></i>
            <input type="text" name="txtNombre" class ="input" placeholder="Nombre">        
         </div>
         <div class="input-contenedor text-center">
            <i class="bi bi-sort-numeric-up icon"></i>
            <input type="text" name="txtCantidadSemestres" class ="input" placeholder="Cantidad Semestres">        
         </div>
         <div class="input-contenedor text-center">
            <i class="bi bi-chat-right-text-fill icon"></i>
            <input type="text" name="txtDescripcion" class ="input" placeholder="Descripcion">        
         </div>
         </div>
         <a class="bx bx-log-out" href="carrera.php"></a>
         <input type="submit" value="Registrar" class="button">

     </div>
    </form>
</body>
</html>