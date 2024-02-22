<?php include("db.php")?>
<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: ../login/indexLogin.php");
    exit();
}
?>
<?php
if (isset($_POST['guardar_registro_medico'])){
    $nombreMedico = $_POST['nombreMedico'];
    $apellidoMedico = $_POST['apellidoMedico'];
    $especialidadMedico = $_POST['especialidadMedico'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO medicos(nombreMedico, apellidoMedico, especialidadMedico) VALUES ('$nombreMedico','$apellidoMedico','$especialidadMedico')";
	//die( $query);
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Registro Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "createMedico.php";
    </script>