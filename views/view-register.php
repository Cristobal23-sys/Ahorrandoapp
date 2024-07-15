<?php
include "../class/connection.php";
$conn = new connection();
session_start();



?>
<!DOCTYPE html>
<html>

<head>
  <title>LogIn</title>
  <link rel="stylesheet" type="text/css" href="../Css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <div class="navbar-left">
        <a class="navbar-brand" style="display: flex; justify-content: center;" href="index.php">Ahorrando®</a>
      </div>

    </div>
  </nav>
  <h2 style="display: flex; justify-content: center;">Registro</h2>
  <!-- Logo Ahorrando -->
  <div class="fadeIn first" style="display: flex; justify-content: center;">

  </div>
  <style>
        .message {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid transparent;
            border-radius: 5px;
        }
        .message.success {
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
        }
        .message.error {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
        }
    </style>

  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"><img src="../img/ahor.png" id="icon" alt="User Icon" style="width: 30% ;" /></h4>
          </div>
          <div class="card-body">
            <div class="card">
              <br>
              <form name="f1" style=" justify-content: center; margin-left: 33%; " action="../class/newUsr.php"
                method="POST" onsubmit="return validateForm()">🧔🏽‍♂️
                <input type="text" style="margin-bottom:5px ;" id="user" class="fadeIn second" name="user"
                  placeholder="Usuario" required>
                <br> 📨 <input type="email" id="email" style="margin-bottom:5px ;" class="fadeIn third" name="email"
                  placeholder="email" required onblur="validateEmail(this.value)">
                <span id="emailError" style="color: red; display: none;">Ingresa un correo electrónico válido</span>
                <br> 🔒 <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña"
                  required onkeyup="maskPassword(this)">
                <br>
                <br> <input type="submit" class="fadeIn fourth" value="Registrarse" style="margin-left: 14%">
              </form>
              <p style="display: flex; justify-content: center;">Ya tienes cuentas?</p><a href="index.php"
                style="display: flex; justify-content: center;">Iniciar sesion</a>
              <!-- Remind Passowrd -->
             <p><?php
    // Verificar si hay un mensaje de error almacenado en la sesión
    
    if (isset($_SESSION['message'])) {
      $message = $_SESSION['message'];
      $message_type = $_SESSION['message_type'];
      echo "<div class='message $message_type'>$message</div>";
      unset($_SESSION['message']);
      unset($_SESSION['message_type']);
  }
    
    ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <div id="formFooter" style="display: flex; justify-content: center; ">
      Ahorrando® 2024
    </div>


</body>

</html>