<?php include("../admisionCliente/includes/header.php")?>
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
<div class="container p-12 ">
    <div class = "row">
        <div class="col-md-12">
            <div class ="card text-center bg-transparent">
                <div class="card-body">
                    <h1 class="card-title text-dark rounded-right rounded-left font-weight-light  navbar-light" style="background-color: #D5FEB7;">Admision</h5>
                    <p class="card-text text-dark  navbar-light" style="background-color: #D5FEB7;"">Manejo de Admisiones</p>
                                    
                    
                        <div class="col-sm-15">
                            <div class="card bg-dark">
                                <div class="card-body text-dark rounded-right rounded-left  navbar-light" style="background-color: #D5FEB7;">
                                    <h5 class="card-title">Leer</h5>
                                    <p class="card-text">Visualice admisiones</p>
                                    <a href="readAdmision.php" class="text-dark btn btn-outline-success">Leer</a>
                                </div>
                            </div>

                        <div class="col-sm-6"> <br> </div>
                    
                    </div>
                       
                        <div class="col-sm-15">
                            <div class="card bg-dark">
                                <div class="card-body rounded-right rounded-left text-dark  navbar-light" style="background-color: #D5FEB7;">
                                    <h5 class="card-title">Eliminar</h5>
                                    <p class="card-text">Elimine Admisiones/s</p>
                                    <a href="deleteAdmision.php" class="text-dark btn btn-outline-success">Borrar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php include("../crudCliente/includes/footer.php")?>
