<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../css/style.css">

  
   
</head>
<body>
    <header>
        <nav class="navigation">
            <ion-icon name="exit-outline"></ion-icon>
            <a href="../index.html">Regresar al menú principal</a>
        </nav>
    </header>

    <!-- The rest of your HTML content goes here -->

    <?php
    // Comprobar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recuperar datos del formulario
        $usuario = $_POST["usuario"];
        $contrasena = $_POST["contrasena"];

        // Aquí podrías realizar la validación del usuario y contraseña en una base de datos
        // Por simplicidad, este ejemplo solo verifica que el usuario y la contraseña sean "admin"

        if ($usuario === "admin" && $contrasena === "admin") {
            echo "<p>Bienvenido, $usuario</p>";
        } else {
            echo "<p>Usuario o contraseña incorrectos</p>";
        }
    }
    ?>

 <div class="wrapper">
    <div class="form-box login">
    <h2>Login</h2>
    <form action="../html/index.html">
        <div class="input-box">
            <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
            <input type="email" required>
            <label>Email</label>
        </div>
        <div class="input-box">
            <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
            <input type="password" required>
            <label>Password</label>
        </div>
        <div class = "remember-forgot">
            <label><input type="checkbox"> 
        Recordar mi contraseña</label>
       <a href="#">has olvidado tu contraseña?</a>
        </div>
        <button type="submit" class="btn">Iniciar Sesion</button>
        <div class="login-register">
            <p>No tengo una cuenta creada <a href="#"
        class="register-link">Registrar</a></p>
        </div>
    </form>
  </div>

  </div>

    <script src="../js/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
