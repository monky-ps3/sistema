<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTUALIZAR pelicula </title>
</head>
<body>
<?php
         $item = session('validation');
         echo $item;
          
        ?>
   <form action="/sistemamedico4/public/pelicula/update/<?php echo $pelicula['id'] ?>" method="post">
       <label for="titulo">Titulo</label>
      <input type="text" name="titulo" id="titulo" placeholder="titulo" value="<?php echo old('titulo',$pelicula['titulo']) ?>">
      <label for="descripcion">Descripcion</label>
      <textarea name="descripcion" id="descripcion" cols="30" rows="10" ><?php echo $pelicula['descripcion'] ?></textarea>
      <button type="submit">Registrar</button>


   </form>
    
</body>
</html>