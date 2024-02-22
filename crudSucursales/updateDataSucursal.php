<?php include("includes/header.php")?>
<?php include("db.php")?>

<?php

$nombreSucursal = "";
$direccionSucursal = "";
$numeroSucursal = "";

if(isset($_GET['idSucursal'])){
    $idSucursal = $_GET['idSucursal'];
    
    $query = "SELECT * FROM sucursales WHERE idSucursal = $idSucursal";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $nombreSucursal = $row['nombreSucursal'];
        $direccionSucursal = $row['direccionSucursal'];
        $numeroSucursal = $row['numeroSucursal'];
    } else {
        echo "Hubo un error al obtener los datos de la sucursal.";
    }
}

if (isset($_POST['update2'])){
    $idSucursal = $_GET['idSucursal'];
    $nombreSucursal = $_POST['nombreSucursal'];
    $direccionSucursal = $_POST['direccionSucursal'];
    $numeroSucursal = $_POST['numeroSucursal'];
    
    $query = "UPDATE sucursales SET nombreSucursal = '$nombreSucursal', direccionSucursal = '$direccionSucursal', numeroSucursal = '$numeroSucursal' WHERE idSucursal = $idSucursal";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "updateSucursal.php";
        </script>
        <?php 
    }
}
?>
<div class ="h-screen w-full flex items-center justify-center">
    <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
        <h1 class="px-5 text-xl font-semibold">ACTUALIZAR SUCURSAL</h1>
        <p class="px-5">Ingrese los datos:</p>
        <form action="updateDataSucursal.php?idSucursal=<?php echo $_GET['idSucursal']; ?>" method="POST" class='w-[600px] px-5 py-3'>
            <div class='w-full flex flex-col gap-4'>
                <input type="text" name="nombreSucursal" value="<?php print $nombreSucursal;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Nombre">
                <textarea name="direccionSucursal" rows="2" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar Direccion"><?php echo $direccionSucursal;?></textarea>
                <textarea name="numeroSucursal" rows="2" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar numero"><?php echo $numeroSucursal;?></textarea>
            </div>
            <button class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" name="update2">Actualizar</button>
        </form>
    </div>
</div>
   

<?php include("includes/footer.php")?>
     
    
    