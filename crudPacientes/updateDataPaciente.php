<?php include("includes/header.php")?>
<?php include("db.php")?>

<?php

$nombrePaciente = "";
$apellidoPaciente = "";
$numeroPaciente = "";

if(isset($_GET['idPaciente'])){
$idPaciente = $_GET['idPaciente'];
$query = "SELECT * FROM paciente WHERE idPaciente = $idPaciente";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) ==1) {
    $row = mysqli_fetch_array($result);
    $nombrePaciente = $row['nombrePaciente'];
    $apellidoPaciente = $row['apellidoPaciente'];
    $numeroPaciente = $row['numeroPaciente'];
    }
}
if (isset($_POST['update2'])){
    $idPaciente = $_GET['idPaciente'];
    $nombrePaciente = $_POST['nombrePaciente'];
    $apellidoPaciente = $_POST['apellidoPaciente'];
    $numeroPaciente = $_POST['numeroPaciente'];
    
    $query = "UPDATE paciente SET nombrePaciente = '$nombrePaciente', apellidoPaciente = '$apellidoPaciente', numeroPaciente = '$numeroPaciente' WHERE idPaciente = $idPaciente";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "createPacientes.php";
        </script>
        <?php 
    }
}
?>

<div class ="h-screen w-full flex items-center justify-center">
    <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
        <h1 class="px-5 text-xl font-semibold">ACTUALIZAR Paciente</h1>
        <p class="px-5">Ingrese los datos:</p>
        <form action="updateDataPaciente.php?idPaciente=<?php echo $_GET['idPaciente']; ?>" method="POST" class='w-[600px] px-5 py-3'>
            <div class='w-full flex flex-col gap-4'>
            <input type="text" name="nombrePaciente" value="<?php echo $nombrePaciente;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Nombre">
            <input type="text" name="apellidoPaciente" value="<?php echo $apellidoPaciente;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Apellido">
            <input type="text" name="numeroPaciente" value="<?php echo $numeroPaciente;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar número">
            </div>
            <button class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" name="update2">Actualizar</button>
        </form>
    </div>
</div>


<?php include("includes/footer.php")?>
     
    
    