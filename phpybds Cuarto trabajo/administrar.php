<?php
  require('inc/conexion.php');

  $consulta="SELECT * FROM trabajos";
  $resultado=$mysqli->query($consulta);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <title>Pagina PHP CON BASE DE DATOS</title>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/estilos.css">

  </head>

  <body>

  <!-- Dropdown Structure -->
  <ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">one</a></li>
    <li><a href="#!">two</a></li>
    <li class="divider"></li>
    <li><a href="#!">three</a></li>
  </ul>
  <nav class="black">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">PHPbds</a>
      <!-- activate side-bav in mobile view -->
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
      <ul class="right hide-on-med-and-down">
        
        <li><a href="index.php">Inicio</a></li>
        <!-- Dropdown Trigger -->
      </ul>
      <!-- navbar for mobile -->
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="components.html">Components</a></li>
      </ul>
    </div>
  </nav>

  <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Nuevo</a>

  <div id="modal1" class="modal" >
      <div class="modal-content">
        <h4>Ingresar datos</h4>
        <div class="row">
          <form class="col s12" action="inc/nuevo.php" method="post">
            <div class="row">
              <div class="input-field col s12">
                <input id="first_name" type="text" name="nombre" class="validate">
                  <label for="first_name">Nombre</label>
              </div>
              <div class="input-field col s12">
                <input id="last_name" type="text" name="titulo" class="validate">
                <label for="last_name">Título</label>
              </div>
            </div>
            <button type="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Enviar</button>
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
      </div>
    </div>

  
  <div class="container">
   
      <table>
        <thead>
          <tr>
              <th data-field="id">Id</th>
              <th data-field="nombre">Nombre</th>
              <th data-field="titulo">Titulo</th>
              <th data-field="operaciones">operaciones</th>
          </tr>
        </thead>

        <tbody>
         <?php while ($fila=$resultado->fetch_assoc()){ ?>
          <tr>
            <td><?php echo $fila ['id']; ?></td>
            <td><?php echo $fila ['nombre']; ?></td>
            <td><?php echo $fila ['titulo']; ?></td>
            <td class="center"><a href="inc/eliminar.php?id=<?php echo $fila['id'];?>"><i class="mdi-action-highlight-remove small center"></i></a>
            <a href="#modificar<?php echo $fila['id'];?>" class="modal-trigger"><i class="mdi-content-content-copy small center"></i></a></td>
            <div id="modificar<?php echo $fila['id'];?>" class="modal" >
              <div class="modal-content">
                <h4>Modificar datos</h4>
                <div class="row">
                  <form class="col s12" action="inc/modificar.php" method="post">
                    <input type="text" style="display: none;" name="id" value="<?php echo $fila ['id']; ?>">
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="first_name" type="text" name="nombre" class="validate" value="<?php echo $fila ['nombre']; ?>">
                          <label for="first_name">Nombre</label>
                      </div>
                      <div class="input-field col s12">
                        <input id="last_name" type="text" name="titulo" class="validate" value="<?php echo $fila ['titulo']; ?>">
                        <label for="last_name">Título</label>
                      </div>
                    </div>
                    <button type="submit" class="btn waves-effect waves-light"><i class="mdi-content-send right"></i>Enviar</button>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Cerrar</a>
              </div>
            </div>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    
    </div>
 

   

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    
    <script>
        
        $(document).ready(function() {
          $(".button-collapse").sideNav();
          $('.modal-trigger').leanModal();
        });
        
        </script>
  </body>
</html>