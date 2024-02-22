<?php include("db.php")?>
<?php 

if (isset($_POST['guardar_registro_sucursal'])){
    $nombreSucursal = $_POST['nombreSucursal'];
    $direccionSucursal = $_POST['direccionSucursal'];
    $numeroSucursal = $_POST['numeroSucursal'];
    $imagen = $_POST['imagen'];
    
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO sucursales(nombreSucursal, direccionSucursal, numeroSucursal, imagen) VALUES ('$nombreSucursal','$direccionSucursal','$numeroSucursal', '$imagen')";
	//die( $query);
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Sucursal Guardado");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "createSucursal.php";
    </script>
