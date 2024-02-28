<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loging and register</title>
    <link rel="stylesheet" href="../estilos/Style.css">
</head>
<body>
    <main>
        <div class="contenedor">
            <div class="caja-Trasera">
                <div class="caja-TraseraLogin">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para ingresar a la página</p>
                    <button id="btn-iniciarSesion">Iniciar sesión</button>
                </div>
                <div class="caja-TraseraRegister">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn-Registrate">¡Registrate!</button>
                </div>
            </div>
            <div class="contenedor-Formulario">

                <form action="" class="formulario-Login">
                        <h2>Iniciar sesión</h2>
                        <input type="text" placeholder="Nombre de usuario">
                        <input type="password" placeholder="Contraseña">
                        <button>ingresar</button>
                </form>

                <form action="../base_de_datos/registro_usuario.php" method = "POST" class="formulario-Register">
                    <h2>Regístrate</h2>
                    <input type="text" placeholder="Ingresa tus nombres" name="nombres">
                    <input type="text" placeholder="Ingresa tus apellidos" name="apellidos">
                    <input name="tipoDocumento" placeholder = "Ingresa tu tipo de documento" name="tipoDocumento">
                    <input type="tel" placeholder="Ingresa tu número de documento" name="documento">
                    <input type="text" placeholder="Ingresa tu dirección" name="direccion">
                    <input type="tel" placeholder="Ingresa tu número de telefono fijo" name="telefonoFijo">
                    <input type="tel" placeholder="Ingresa tu número celular" name="telefonoCelular">
                    <input type="email" placeholder="Ingresa tu correo electronico" name="correo">
                    <p>Ingresa tu fecha de nacimiento</p>
                    <input type="date" name="fechaNacimiento">
                    <input type="text" placeholder="Ingresa un nombre de usuario" name="userName">
                    <input type="password" placeholder ="Ingresa una contraseña" name="contrasena">
                    <input type="submit" name="registrarse">
                </form>
            </div>
            
        </div>
    </main>
    <script src="../js/script.js"></script>
</body>
</html>