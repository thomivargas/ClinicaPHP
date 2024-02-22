<?php include("includes/header.php") ?>
<?php include("db.php") ?>
<?php
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['usuario'])) {
    // Si no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: ../login/indexLogin.php");
    exit();
}
?>
<div class ="h-screen w-full flex items-center justify-center">
    <div>
        <h1 class="text-4xl font-bold my-5 text-center">Medicos</h1>
        <table class="table-auto">
            <thead class="border border-black">
                <tr class="px-8 py-4 border border-black text-white bg-sky-800">
                    <th class="px-8 py-4">Nombre</th>
                    <th class="px-8 py-4">Apellido</th>
                    <th class="px-8 py-4">Especialidad</th>
                    <th class="px-8 py-4">Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query = "SELECT * FROM medicos";
                    $result_cliente = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_cliente)) { ?>
                    <tr class="px-8 py-4 border border-black">
                        <td class="px-8 py-4 border border-black"><?php echo $row['nombreMedico']?></td>
                        <td class="px-8 py-4 border border-black"><?php echo $row['apellidoMedico']?></td>
                        <td class="px-8 py-4 border border-black"><?php echo $row['especialidadMedico']?></td>
                        <td class="px-8 py-4 border border-black">
                            <a href="updateDataMedico.php?idMedicos=<?php echo $row['idMedicos'] ?>">
                                <img src="../images/editicon.svg" alt="edit" class="w-5 mx-auto">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php include("includes/footer.php") ?>