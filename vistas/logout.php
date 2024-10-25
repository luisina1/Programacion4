<?php
session_start(); // Inicia la sesión

// Verificar si hay una sesión activa
if (isset($_SESSION['nombre'])) {
    // Destruir la sesión
    session_unset(); // Eliminar todas las variables de sesión
    session_destroy(); // Destruir la sesión

    // Redirigir al usuario a la página de inicio de sesión
    header("Location: login.php");
    exit();
} else {
    // Si no hay sesión activa, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
