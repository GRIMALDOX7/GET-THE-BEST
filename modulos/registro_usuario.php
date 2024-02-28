<?php
include("conexion.php");

if (isset($_POST['registrarse'])) {
  if (strlen($_POST['nombres']) > 0 && strlen($_POST['apellidos']) > 0 && strlen($_POST['tipoDocumento']) > 0 && strlen($_POST['documento']) > 0 && strlen($_POST['direccion'])
   > 0 && strlen($_POST['telefonoCelular']) > 0 && strlen($_POST['correo']) > 0 && strlen($_POST['fechaNacimiento']) > 0 && strlen($_POST['userName']) > 0 && strlen($_POST['contrasena']) > 0) {
    $nombres = trim($_POST['nombres']);
    $apellidos = trim($_POST['apellidos']);
    $tipoDocumento = trim($_POST['tipoDocumento']);
    $documento = trim($_POST['documento']);
    $direccion = trim($_POST['direccion']);
    $telefonoCelular = trim($_POST['telefonoCelular']);
    $correo = trim($_POST['correo']);
    $fechaNacimiento = trim($_POST['fechaNacimiento']);
    $userName = trim($_POST['userName']);
    $contrasena = trim($_POST['contrasena']);
    $consulta = "INSERT INTO deportista(nombres, apellidos, tipoDocumento, documento, direccion, telefonoCelular, correo, fechaNacimiento, userName, contrasena) VALUES ('$nombres','$apellidos', '$tipoDocumento',
    '$documento', '$direccion', '$telefonoCelular', '$correo', '$fechaNacimiento', '$userName', '$contrasena')";
    $resultado = mysqli_query($conexion, $consulta);
    if ($resultado) {
      ?>
      <h3 class="ok">¡Te has inscrito correctamente!</h3>
      <?php
    } else {
      ?>
      <h3 class="bad">¡Ups ha ocurrido un error!</h3>
      <?php
    }
  } else {
    ?>
    <h3 class="bad">¡Por favor complete los campos!</h3>
    <?php
  }
}
?>
