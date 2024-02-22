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

if (isset($_POST['guardar_registro'])){
    $nombrePaciente = $_POST['nombrePaciente'];
    $apellidoPaciente = $_POST['apellidoPaciente'];
    $numeroPaciente = $_POST['numeroPaciente'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO paciente(nombrePaciente, apellidoPaciente, numeroPaciente) VALUES ('$nombrePaciente','$apellidoPaciente','$numeroPaciente')";
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
    window.location = "createPacientes.php";
    </script>
