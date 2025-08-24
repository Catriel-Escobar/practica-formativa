<?php
// i) Recibir datos enviados por el frontend
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

// ii) Verificación en backend
// Ejemplo: usuario y contraseña fijos (en un caso real vendrían de DB)
$usuarioValido = "admin";
$passwordValido = "1234";

// iii) Devolver respuesta
if ($username === $usuarioValido && $password === $passwordValido) {
    echo "ok";
} else {
    echo "error";
}
?>