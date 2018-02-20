<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | register</title>
    <!-- Normalize CSS -->
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
</head>
<body class="font-cover" id="login">
    <div class="container-login center-align">
        <div style="margin:15px 0;">
            <i class="zmdi zmdi-account-circle zmdi-hc-5x"></i>
            <p>Inicia sesión con tu cuenta</p>   
        </div>
        <form action="validatee.php" method="POST">
            <div class="input-field">
                <input id="UserName" type="text" class="validate" name="UserName" autocomplete="off" autofocus="" required>
                <label for="UserName"><i class="zmdi zmdi-account"></i> Nombre</label>
            </div>
            <div class="input-field col s12">
                <input id="Password" type="password" class="validate" name="Password" required autocomplete="off">
                <label for="Password"><i class="zmdi zmdi-lock"></i> Contraseña</label>
            </div>
            <button type="submit" class="waves-effect waves-teal btn-flat" >Ingresar <i class="zmdi zmdi-mail-send"></i></button>
        </form>
        <div class="divider" style="margin: 20px 0;"></div>
        <a href="home.html">Crear cuenta</a>
    </div>

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