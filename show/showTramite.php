<?php 
require '../connect.php';
$con = connectDB();

$where ="";

$sql = "SELECT * FROM servicios";

$search_query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tramites y servicios</title>

	<link rel="stylesheet" href="../css/normalize.css">
    
    <!-- Materialize CSS -->
   <link rel="stylesheet" href="../css/materialize.min.css">
   
    <!-- Material Design Iconic Font CSS -->
   <link rel="stylesheet" href="../css/material-design-iconic-font.min.css">
   
   <!-- Malihu jQuery custom content scroller CSS -->
   <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.css">
   
   <!-- Sweet Alert CSS -->
   <link rel="stylesheet" href="../css/sweetalert.css">
   
   <!-- MaterialDark CSS -->
   <link rel="stylesheet" href="../css/style.css">

   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 


</head>
<body>
	 <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                Municipio de Tulancingo <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="../assets/img/tulogo.jpg" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">App Tulancingo</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="../main.php" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Inicio</a>
                    </li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Eventos</a>
                    </li>
                     <li>
                        <a href="show/showTramite.php" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Tramites</a>
                    </li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Registro</a>
                    </li>
                     <li>
                        <a href="home.html" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Audiencias</a>
                    </li>
                </ul>
            </div>  
        </div>  
    </section>

    <!-- Page content -->
    <section class="ContentPage full-width">
        <!-- Nav Info -->
        <div class="ContentPage-Nav full-width">
            <ul class="full-width">
                <li class="btn-MobileMenu ShowHideMenu"><a href="#" class="tooltipped waves-effect waves-light" data-position="bottom" data-delay="50" data-tooltip="Menu"><i class="zmdi zmdi-more-vert"></i></a></li>
                <li><a href="#" class="tooltipped waves-effect waves-light btn-ExitSystem" data-position="bottom" data-delay="50" data-tooltip="Logout"><i class="zmdi zmdi-power"></i></a></li>
            </ul>   
        </div>

          </div>
        </div>
<!-- Barra de busqueda -->
     <div class="container">
       <div class="row">
         <h4>Listado de tramites y servicios</h4>
       </div>

        <div class="row">
            <!-- Tiles -->

            <left>

              <div id="buscar" class="derecha">
                <h6>Busqueda</h6>
                <input type="search" class="light-table-filter" data-table="order-table" placeholder="Busqueda por filtro">
              </div>
            </left>
    </div>
    <div class="row">
                <div class="col s12">
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th data-field="id">Nombre del trámite
                                o servicio</th>
                                <th data-field="name">Descripción del trámite o servicio</th>
                                <th data-field="Unidad">Unidad administrativa</th>
                                <th data-field="Costo">Costo</th>
                                <th data-field="Requisitos">Requisitos</th>
                                <th>Modificar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php while ($row = $search_query->fetch_array(MYSQLI_ASSOC)) {?>
                            <tr>
                             <td><?php echo  $row['name']; ?></td>
                             <td><?php echo $row['description']; ?></td>
                             <td><?php echo $row['unit_admin']; ?></td>
                             <td><?php echo $row['price']; ?></td>
                             <td><?php echo $row['requisito']; ?></td>
                             <td><a href="modificarT.php?id=<?php echo $row['idservicio']; ?>"><img src="../assets/img/edit1.png" style="width:70%"></a></td>
                <td><a href="#" data-href="eliminartram.php?id=<?php echo $row['id_servicio']; ?>" data-toggle="modal" data-target="#confirm-delete"><img src="../assets/img/delete.png" style="width:90%"></a></td>
                           </tr>
                          <?php }?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
    <button>Nuevo registro</button>
  </div>
  </div>
  <!-- Finaliza la busqueda-->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
          
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
          </div>
          
          <div class="modal-body">
            ¿Desea eliminar este registro?
          </div>
          
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a class="btn btn-danger btn-ok">Delete</a>
          </div>
        </div>
      </div>
</div>
 
<script>
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
        
        $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
      });
    </script> 


</div><br>
        <!-- Footer -->   
       
            <div class="NavLateralDivider"></div>
            <div class="footer-copyright">
                <div class="container center-align">
                    © 2018 Ricardo Jhovani Alvarado Miranda
                </div>
            </div>
        </footer>
    </section>
    
    <!-- Sweet Alert JS -->
    <script src="js/sweetalert.min.js"></script>
    
    <!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-2.2.0.min.js"><\/script>')</script>
    
    <!-- Materialize JS -->
	<script src="../js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="../js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="../js/main.js"></script>
          <script type="text/javascript">
            <script type="text/javascript">
  //funcion de javascript que permite hacer la busqueda en tiempo real
(function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
        </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>