<?php include("includes/header.php")?>
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

$nombreMedico = "";
$apellidoMedico = "";
$especialidadMedico = "";

if(isset($_GET['idMedicos'])){
    $idMedicos = $_GET['idMedicos'];
    
    $query = "SELECT * FROM medicos WHERE idMedicos = $idMedicos";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombreMedico = $row['nombreMedico'];
        $apellidoMedico = $row['apellidoMedico'];
        $especialidadMedico = $row['especialidadMedico'];
    } else {
        echo "Hubo un error al obtener los datos de los medicos.";
    }
}

if (isset($_POST['update2'])){
    $idMedicos = $_GET['idMedicos'];
    $nombreMedico = $_POST['nombreMedico'];
    $apellidoMedico = $_POST['apellidoMedico'];
    $especialidadMedico = $_POST['especialidadMedico'];
    
    $query = "UPDATE medicos SET nombreMedico = '$nombreMedico', apellidoMedico = '$apellidoMedico', especialidadMedico = '$especialidadMedico' WHERE idMedicos = $idMedicos";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "createMedico.php";
        </script>
        <?php 
    }
}
?>
<div class ="h-screen w-full flex items-center justify-center">
    <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
        <h1 class="px-5 text-xl font-semibold">ACTUALIZAR Paciente</h1>
        <p class="px-5">Ingrese los datos:</p>
        <form action="updateDataMedico.php?idMedicos=<?php echo $_GET['idMedicos']; ?>" method="POST" class='w-[600px] px-5 py-3'>
            <div class='w-full flex flex-col gap-4'>
                <input type="text" name="nombreMedico" value="<?php print $nombreMedico;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Nombre">
                <textarea name="apellidoMedico" rows="2" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Apellido"><?php echo $apellidoMedico;?></textarea>
                <textarea name="especialidadMedico" rows="2" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Especialidad"><?php echo $especialidadMedico;?></textarea>
            </div>
            <button class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" name="update2">Actualizar</button>
        </form>
    </div>
</div>


<?php include("includes/footer.php")?>
     
    
    