<?php include("./crudPacientes/db.php")?>
<?php 

if (isset($_POST['guardar_registro'])){
    $nombreAdmitido = $_POST['nombreAdmitido'];
    $apellidoAdmitido = $_POST['apellidoAdmitido'];
    $patologia = $_POST['patologia'];
    $numeroAdmitido = $_POST['numeroAdmitido'];
    //echo $nombres;
    //echo $direccion;
}

    $query = "INSERT INTO admisionCliente(nombreAdmitido, apellidoAdmitido, patologia, numeroAdmitido) VALUES ('$nombreAdmitido','$apellidoAdmitido','$patologia','$numeroAdmitido')";
	//die( $query);
    $result = mysqli_query($conn, $query);
    if(!$result){
        die("Fallo en el query. Existe un problema en la base de datos.");
    }
    else{
        ?>
        <script>alert("Exitoso, Espere respuestas via wtsp!");</script>
        <?php 
        
    }

    //si quisiera redireccionar a index directamente:
    ?>
    <script>
    window.location = "vistaCliente.php";
    </script>
