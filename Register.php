<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registro</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">

<style type="text/css">
html,
body {
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
    width: 60%;
}
.margin {
  margin: 0 !important;
}
</style>
  
</head>


<body class="black">



  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form">
        <div class="row">
          <div class="input-field col s12 center">
            <img src="images/logo.jpg" alt="" class="responsive-img valign profile-image-login">
            <p class="center login-form-text">Registro a  la plataforma</p>
          </div>
        </div>
<form method="POST" action="registro.php">
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" class="validate">
            <label for="username" class="center-align">Usuario</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-communication-email prefix"></i>
            <input id="email" type="email" class="validate">
            <label for="email" class="center-align">Correo</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" class="validate">
            <label for="password">Contraseña</label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password-again" type="password">
            <label for="password-again">Repetir contraseña</label>
          </div>
        </div>
        
        <div class="row">
          <div class="input-field col s12">
            <a href="" class="btn waves-effect waves-light col s12">Registrarse</a>
          </div>
          <div class="input-field col s12">
            <p class="margin center medium-small sign-up">¿Ya tienes una cuenta? <a href="Login.html">Ingresa</a></p>
          </div>
        </div>
      </form>
    </div>
  </div>

<script type="text/javascript">
alert("El usuario fue dado de alta");
</script>
<?php } } ?>
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--js de materialize -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>



 
</body>

</html>