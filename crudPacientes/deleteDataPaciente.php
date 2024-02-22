<?php include("db.php")?>

<?php
if(isset($_GET['idPaciente'])){
        $idPaciente = $_GET['idPaciente'];
        $query = "DELETE FROM paciente WHERE idPaciente = $idPaciente";
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
    window.location = "createPacientes.php";
    </script>
    

