<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Listado Categorias</h1>
           <a href="categoria/new">Crear</a>
        <table>
            <tr>
                
            <th>id</th>
                <th>titulo</th>
              
                <th>opciones</th>

            </tr>
            <?php foreach ($categorias as $key => $p) { ?>
                <tr>
                <td><?php echo $p['id'] ?></td>
                    <td><?php echo $p['titulo'] ?></td>
                       
                        <td>
                            <a href="categoria/show/<?php echo $p['id']  ?>">Show</a>
                            <a href="categoria/edit/<?php echo $p['id']  ?>">Edit</a>
                            <a href="<?php  echo base_url("categoria/delete/". $p['id']); ?>">Edit</a>
                           
                            <form action="<?php  echo base_url("categoria/delete/". $p['id']); ?>">
                              <button type="submit">Delete </button>    
                           </form>
                        </td>

                </tr>

            <?php
            }
            ?>

    </div>
    </table>

</body>

</html>