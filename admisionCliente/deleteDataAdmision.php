<?php include("../crudPacientes/db.php")?>

<?php
if(isset($_GET['idAdmision'])){
        $idAdmision = $_GET['idAdmision'];
        $query = "DELETE FROM admisionCliente WHERE idAdmision = $idAdmision";
        $result = mysqli_query($conn, $query);
        if(!$result)
        {
            die("El query para eliminar falló");
        }
        else{
            ?>
            <script>alert("Admision Eliminada");</script>
            <?php 
        }
    }
    //si quisiera redireccionar a index directamente: ?>
    <script>
    window.location = "readAdmision.php";
    </script>
    

