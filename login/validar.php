<?php

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recuperar datos del formulario
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    // Incluir el archivo con la conexión a la base de datos
    require_once "../crudPacientes/db.php"; 

    // Consulta 
    $sql = "SELECT * FROM users WHERE usuario = '$usuario' AND password = '$password'";
    $result = $conn->query($sql);

    // Verificar si se encontró un usuario
    if ($result->num_rows > 0) {
        // Usuario autenticado, redireccionar a la página deseada
        // Usuario autenticado, establecer la variable de sesión
        session_start();
        $_SESSION['usuario'] = $usuario;
        header("Location: ../vistaCliente.php");
        exit(); 
    } else {
        // Usuario no encontrado, mostrar mensaje de error o redireccionar a otra página de error
        echo '<script>alert("Credenciales incorrectas"); window.location.href = "indexLogin.php";</script>';
    }
}
?>
