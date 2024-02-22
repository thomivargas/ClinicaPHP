<?php include("db.php")?>

<?php
if(isset($_GET['idSucursal'])){
        $idSucursal = $_GET['idSucursal'];
        $query = "DELETE FROM sucursales WHERE idSucursal = $idSucursal";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Registro Eliminado");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "createSucursal.php";
    </script>
    

