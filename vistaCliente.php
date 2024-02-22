<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: login/indexLogin.php");
    exit();
}

// Si el usuario está autenticado, muestra el contenido de la página
include("headerHome.php");
?>
        <div class='w-full h-screen flex justify-center items-center'>
            <div>
                <img src="./images/medicaImagen.png" alt="mujer">
                <h1 class='text-center text-2xl'>Panel Administrador</h1>
            </div>
        </div>
    </div>
</body>
</html>