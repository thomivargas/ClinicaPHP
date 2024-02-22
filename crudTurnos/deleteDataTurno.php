<?php include("db.php")?>

<?php
if(isset($_GET['idTurnos'])){
        $idTurnos = $_GET['idTurnos'];
        $query = "DELETE FROM turnos WHERE idTurnos = $idTurnos";
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
    window.location = "createTurno.php";
    </script>
    

