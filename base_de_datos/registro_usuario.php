
<?php 
    include 'conexion.php';

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $tipoDocumento = $_POST['tipoDocumento'];
    $documento = $_POST['documento'];
    $direccion = $_POST['direccion'];
    $telefonoFijo = $_POST['telefonoFijo'];
    $telefonoCelular = $_POST['telefonoCelular'];
    $correo = $_POST['correo'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $userName = $_POST['userName'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO deportista(nombres,apellidos,tipoDocumento,documento,direccion,telefonoFijo,telefonoCelular,correo,fechaNacimiento,userName,contrasena) 
    VALUES ('$nombres','$apellidos','$tipoDocumento','$documento','$direccion','$telefonoFijo','$telefonoCelular','$correo','$fechaNacimiento','$userName','$contrasena')";
    ?>