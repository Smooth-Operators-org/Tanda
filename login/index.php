<!DOCTYPE html>
<html lang="mx">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="styles.css" />
  <title>Login</title>
</head>
<body>
  <div class="login-page">
    <div class="form">
      <img src="/img/60765.svg" class="fondo" />
      <form class="register-form" id="register-form">
        <input type="text" id="matricula" name="matricula" placeholder="Matricula" />
        <input type="text" id="nombre" name="nombre" placeholder="Nombre" />
        <input type="text" id="telefono" name="telefono" placeholder="Telefono" />
        <input type="text" id="email" name="email" placeholder="Email" />
        <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" />
        <input type="password" id="contraseña2" name="contraseña2" placeholder="Repetir contraseña" />
        <button type="button" id="btn-register">Registrarse</button>
        <p class="message">
          <a href="#">Login</a> <i class="fas fa-sign-in-alt fa-lg"></i>
        </p>
      </form>
      <form class="login-form" id="login-form">
        <input type="text" placeholder="Email" name="usuario" id="inputEmail" />
        <input type="password" placeholder="Contraseña" name="password" id="inputPassword" />
        <div class="box">
          <input type="checkbox" name="recordar" id="inputRemember" />
          <label for="recordar">Recordar credenciales</label>
        </div>
        <button type="button" id="btn-login">Login</button>
        <p class="message">
          <a href="#">Registrarse</a> <i class="fas fa-user-plus fa-lg"></i>
        </p>
        <p class="forget-password">
            <a href="/modulos/login/reset-password.php">¿Olvidaste tu contraseña? <i class="fas fa-key"></i> </a>
      </form>
    </div>
  </div>
  <script src="/vendor/components/jquery/jquery.min.js"></script>
  <script src="/vendor/components/jquery-cookie/jquery.cookie.js"></script>
  <script src="/vendor/fortawesome/font-awesome/js/all.js" data-auto-replace-svg="nest"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="/modulos/login/main.js"></script>
</body>
</html>