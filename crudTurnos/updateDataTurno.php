<?php include("includes/header.php")?>
<?php include("db.php")?>

<?php

$fechaTurno = "";
$precioTurno = "";

if(isset($_GET['idTurnos'])){
    $idTurnos = $_GET['idTurnos'];
    
    $query = "SELECT * FROM turnos WHERE idTurnos = $idTurnos";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $fechaTurno = $row['fechaTurno'];
        $precioTurno = $row['precioTurno'];
    } else {
        echo "Hubo un error al obtener los datos de los turnos.";
    }
}

if (isset($_POST['update2'])){
    $idTurnos = $_GET['idTurnos'];
    $fechaTurno = $_POST['fechaTurno'];
    $precioTurno = $_POST['precioTurno'];
    
    $query = "UPDATE turnos SET fechaTurno = '$fechaTurno', precioTurno = '$precioTurno' WHERE idTurnos = $idTurnos";
	//die( $query);
    $result = mysqli_query($conn,$query);
    if (!$result){
        echo "El query de actualizar falló";
    }else{
        ?>
        <script>alert("Registro actualizado");</script>
        <script>
        window.location = "createTurno.php";
        </script>
        <?php 
    }
}
?>
<div class ="h-screen w-full flex items-center justify-center">
    <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
        <h1 class="px-5 text-xl font-semibold">ACTUALIZAR TURNOS</h1>
        <p class="px-5">Ingrese los datos:</p>
        <form action="updateDataTurno.php?idTurnos=<?php echo $_GET['idTurnos']; ?>" method="POST" class='w-[600px] px-5 py-3'>
            <div class='w-full flex flex-col gap-4'>
                <input type="text" name="fechaTurno" value="<?php print $fechaTurno;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar fecha">
                <input name="precioTurno" value="<?php print $precioTurno;?>" class='p-3 bg-gray-250 rounded-lg' placeholder="Actualizar precio">
            </div>
            <button class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" name="update2">Actualizar</button>
        </form>
    </div>
</div>


<?php include("includes/footer.php")?>
     
    
    