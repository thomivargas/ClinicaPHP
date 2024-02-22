<?php include("includes/header.php")?>

<div class ="h-screen w-full flex items-center justify-center">
        <div class="flex flex-col gap-2 border-2 border-black rounded-xl p-5 ">
            <h1 class="px-5 text-xl font-semibold">CREAR SUCURSAL</h1>
            <p class="px-5">Ingrese los datos:</p>
            <form action="saveSucursal.php" class='w-[600px] px-5 py-3' method="POST" >
                <div class='w-full flex flex-col gap-4'>
                    <input type="text" class='p-3 bg-gray-250 rounded-lg' name="nombreSucursal" placeholder="Ingrese Nombre" autofocus>
                    <input type="text" class='p-3 bg-gray-250 rounded-lg' name="direccionSucursal" placeholder="Ingrese Direccion">
                    <input type="text" class='p-3 bg-gray-250 rounded-lg' name="numeroSucursal" placeholder="Ingrese Numero">
                    <input type="text" class='p-3 bg-gray-250 rounded-lg' name="imagen" placeholder="Ingrese Imagen">
                </div>
                <input class="mt-5 bg-black text-white font-bold px-5 py-3 rounded-full cursor-pointer" type="submit" name="guardar_registro_sucursal" value="Guardar">
            </form>
        </div>
    </div>

<?php include("includes/footer.php")?>
