<?php include("../admisionCliente/includes/header.php")?>
<?php include("../crudCliente/db.php")?>
<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: ../login/indexLogin.php");
    exit();
}
?>
<style>
    .div{
        background-image:url('../crudCliente/images/backgroundIndex.jpg') ;
        width: 100%;
        height: 100vh;
        background-size: cover;
        background-repeat: no-repeat;
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
<div class="div">
<div class ="card text-center font-weight-light text-dark navbar-light" style="background-color: #D5FEB7;">
        <div class="card-body ">
            <h1 class="card-title">Eliminar clientes</h1>
            <p class="card-text">Los siguientes son los datos guardados hasta el momento:</p>
         
            <div class="table-responsive-sm">
                <table class="table ">
                    <thead>
                        <tr class="table-success">
                            <th>Nombre cliente</th>
                            <th>Apellido cliente</th>
                            <th>Patologia</th>
                            <th>Numero</th>
                            <th>Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM admisionCliente";
                        $result_Admision = mysqli_query($conn, $query);

                        while($row = mysqli_fetch_array($result_Admision)){?>
                            <tr>
                                <td><?php echo $row['nombreAdmitido']?></td>
                                <td><?php echo $row['apellidoAdmitido']?></td>
                                <td><?php echo $row['patologia']?></td>
                                <td><?php echo $row['numeroAdmitido']?></td>
                                <td>
                                    <a href="deleteDataAdmitido.php?idAdmision=<?php echo $row['idAdmision']?>">
                                    <button type="button" class="btn btn-danger">Eliminar</button>
                                </a>
                                </td>
                            </tr>
                        <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div> 
</div>
    

<?php include("../crudCliente/includes/footer.php")?>
