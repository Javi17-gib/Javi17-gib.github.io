<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="../querylogin.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><i class="ri-store-3-line"></i class="i">E-COMMERCE</a>

            <nav class="navegacion">
                <a href="../INDEX/INDEX.HTML">Inicio</a>
                <a href="#">Ubicacion</a>
                <a href="../COMMERCE/COMMERCE.HTML">Tienda</a>
                <a href="#">Contactanos</a>
            </nav>
            
    </header>

            <div class="fondo">
                <span class="icono-cerrar"><i class="ri-close-line"></i></span>
                <div class="contenedor-form login">
                    <h2>Iniciar Sesion</h2>
                    <form action="../admin/php/login.php" method="post" id="loginForm">
                   <div class="contenedor-input">
                        <span class="icono"><i class="ri-mail-fill"></i></span>
                        <input  name="txtemail" type="email"  class="form-control" id="email" required>
                        <label for="email">Email</label>
                    </div>

                    <div class="contenedor-input">
                        <span class="icono"><i class="ri-lock-2-fill"></i></span>
                        <input name="txtpassword" type="password" class="form-control" id="password"  required >
                        <label for="password">Contraseña</label>
                    </div> 

                    <div class="recordar">
                        <label for="#"><input type="checkbox">Recordar Sesion</label>
                        <a href="#">¿Olvidaste la Contraseña?</a>
                    </div>

                    <button type="submit" class="btn">Iniciar Sesion</button>

                    <div class="registrar">
                        <p class="registrar">¿No tienes cuenta? <a href="#" class="registrar-link">Registrarse</a></p>
                    </div>

                    </form>

                </div>

                <div class="contenedor-form registrar">
                    <h2>Registrarse</h2>
                    <form action="#">
                        <div class="contenedor-input">
                            <span class="icono"><i class="ri-user-fill"></i></span>
                            <input type="text" required>
                            <label for="#">Nombre de Usuario</label>
                        </div>

                        <div class="contenedor-input">
                            <span class="icono"><i class="ri-mail-fill"></i></span>
                            <input type="email" required>
                            <label for="email">Email</label>
                        </div>
    
                        <div class="contenedor-input">
                            <span class="icono"><i class="ri-lock-2-fill"></i></span>
                            <input type="password" required>
                            <label for="password">Contraseña</label>
                        </div>
                        
                        <div class="recordar">
                            <label for="#"><input type="checkbox">Acepto los terminos y condiciones</label>
                        </div>

                        <button type="submit" class="btn">Registrarme</button>

                        <div class="registrar">
                            <p>¿Tienes una cuenta? <a href="#" class="login-link">Iniciar Sesion</a></p>
                        </div>

                    </form>
                </div>

             </div>


    <script src="../JS/login.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php 

        if(isset ($_GET['error'])){
    ?>

        <script>
             Swal.fire({
            icon: "error",
            title: "Oops...",
            text: "Datos no validos!",
    
});
        </script>

    <?php } ?>
    
</body>
</html>