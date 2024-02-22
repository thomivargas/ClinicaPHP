<?php include("includes/header.php")?>
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
    <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
        <h1 class="px-5 text-xl font-semibold">CREAR TURNO</h1>
        <p class="px-5">Ingrese los datos:</p>
        <form action="saveTurno.php" class='w-[600px] px-5 py-3' method="POST" >
            <div class='w-full flex flex-col gap-4'>
                <input type="text" class='p-3 bg-gray-250 rounded-lg' name="fechaTurno" placeholder="Ingrese Fecha" autofocus>
                <input type="text" class='p-3 bg-gray-250 rounded-lg' name="precioTurno" placeholder="Ingrese Precio">
            </div>
            <input class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" type="submit" name="guardar_registro_turno" value="Guardar">
        </form>
    </div>
</div>


<?php include("includes/footer.php")?>
