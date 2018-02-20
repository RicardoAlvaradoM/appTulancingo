<?php 
require 'connect.php';
$con = connectDB();

$id = $_POST['id'];
  $sql = "SELECT * FROM servicios WHERE idservicio = '$id'";
  $search_query=mysqli_query($con,$sql);

  $row = $search_query->fetch_array(MYSQLI_ASSOC);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Modificar elemento</title>

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

     

        <div class="row">
        
  </div>
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
	<script src="js/materialize.min.js"></script>
    
    <!-- Malihu jQuery custom content scroller JS -->
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <!-- MaterialDark JS -->
	<script src="js/main.js"></script>
</body>
</html>