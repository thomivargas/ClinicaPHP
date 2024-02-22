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

if (isset($_POST['guardar_registro_turno'])){
    $fechaTurno = $_POST['fechaTurno'];
    $precioTurno = $_POST['precioTurno'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO turnos(fechaTurno, precioTurno) VALUES ('$fechaTurno','$precioTurno')";
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
    window.location = "createTurno.php";
    </script>
