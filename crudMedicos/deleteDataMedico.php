<?php include("db.php")?>

<?php
if(isset($_GET['idMedicos'])){
        $idMedicos = $_GET['idMedicos'];
        $query = "DELETE FROM medicos WHERE idMedicos = $idMedicos";
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
    window.location = "createMedico.php";
    </script>
    

