<?php include("includes/header.php")?>
<?php include("db.php")
?>

<div class ="h-screen w-full flex items-center justify-center">
    <div>
        <h1 class="text-4xl font-bold my-5 text-center">Sucursales</h1>
        <table class="table-auto">
            <thead class="border border-black">
                <tr class="px-8 py-4 border border-black text-white bg-sky-800">
                    <th class="px-8 py-4">Nombre</th>
                    <th class="px-8 py-4">Direccion</th>
                    <th class="px-8 py-4">Numero</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM sucursales";
                $result_cliente = mysqli_query($conn, $query);
    
                while($row = mysqli_fetch_array($result_cliente)){?>
                    <tr class="px-8 py-4 border border-black">
                        <td class="px-8 py-4 border border-black"><?php echo $row['nombreSucursal']?></td>
                        <td class="px-8 py-4 border border-black"><?php echo $row['direccionSucursal']?></td>
                        <td class="px-8 py-4 border border-black"><?php echo $row['numeroSucursal']?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<?php include("includes/footer.php")?>
