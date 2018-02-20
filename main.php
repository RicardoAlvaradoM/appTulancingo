<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>

	<link rel="stylesheet" href="css/normalize.css">
    
    <!-- Materialize CSS -->
   <link rel="stylesheet" href="css/materialize.min.css">
   
    <!-- Material Design Iconic Font CSS -->
   <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
   
   <!-- Malihu jQuery custom content scroller CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
   
   <!-- Sweet Alert CSS -->
   <link rel="stylesheet" href="css/sweetalert.css">
   
   <!-- MaterialDark CSS -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Boot -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>   
  .carousel-inner img {
      width: 70%;
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
	 <section class="NavLateral full-width">
        <div class="NavLateral-FontMenu full-width ShowHideMenu"></div>
        <div class="NavLateral-content full-width">
            <header class="NavLateral-title full-width center-align">
                Municipio de Tulancingo <i class="zmdi zmdi-close NavLateral-title-btn ShowHideMenu"></i>
            </header>
            <figure class="full-width NavLateral-logo">
                <img src="assets/img/logo.png" alt="material-logo" class="responsive-img center-box">
                <figcaption class="center-align">App Tulancingo</figcaption>
            </figure> 
            <div class="NavLateral-Nav">
                <ul class="full-width">
                    <li>
                        <a href="main.php" class="waves-effect waves-light"><i class="zmdi zmdi-desktop-mac zmdi-hc-fw"></i>Inicio</a>
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
            <!-- Tiles -->

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="assets/img/tulancingo.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Tulancingo, Centro</h3>
          <h6>Parque Nicolas Garibay</h6>
        </div>      
      </div>

      <div class="item">
        <img src="assets/img/tulancingo.jpg" alt="Image" >
        <div class="carousel-caption">
          <h3>Tulancingo, Hgo</h3>
          <h6>Creciendo Juntos</h6>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Municipio de Tulancingo</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="assets/img/tulogo.png" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-4"> 
      <img src="assets/img/play.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p><STRONG>Descarga la aplicacion del Municipio <br> "Municipio de Tulancingo"</STRONG> </p>
    </div>
    <div class="col-sm-4">
    <img src="assets/img/ayutamiento.png" class="img-responsive" style="width:100%" alt="Image">
      </div>
    
     
    </div>
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