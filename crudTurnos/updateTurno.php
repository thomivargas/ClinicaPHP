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
        <h1 class="text-4xl font-bold my-5 text-center">Turnos</h1>
        <table class="table-auto">
            <thead class="border border-black">
                <tr class="px-8 py-4 border border-black text-white bg-sky-800">
                    <th class="px-8 py-4">Fecha</th>
                    <th class="px-8 py-4">Precio</th>
                    <th class="px-8 py-4">Acción</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    $query = "SELECT * FROM turnos";
                    $result_sucursales = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_array($result_sucursales)) { ?>
                    <tr class="px-8 py-4 border border-black">
                        <td class="px-8 py-4 border border-black"><?php echo $row['fechaTurno']?></td>
                        <td class="px-8 py-4 border border-black"><?php echo $row['precioTurno']?></td>
                        <td class="px-8 py-4 border border-black">
                            <a href="updateDataTurno.php?idTurnos=<?php echo $row['idTurnos'] ?>">
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