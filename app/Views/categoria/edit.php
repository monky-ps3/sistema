<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Categoria </title>
</head>
<body>

   <form action="/sistemamedico4/public/categoria/update/<?php echo $categoria['id'] ?>" method="post">
       <label for="titulo">Titulo</label>
      <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo $categoria['titulo'] ?>">
     
      <button type="submit">Registrar</button>


   </form>
    
</body>
</html>