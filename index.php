<?php
include("headerLogin.php") ?>
<?php include("./crudPacientes/db.php") ?>

<section class="w-full flex justify-between">
  <div class="flex flex-col items-center justify-center">
    <h1 class="text-6xl border-b-2 border-black pb-2">Sanatorio y Clínica</h1>
    <div class="mt-5 flex flex-col gap-2 items-center">
      <p class="text-3xl">Primeros en Salud</p>
      <p class="text-3xl">Tecnología para tu vida</p>
    </div>
  </div>

  <img src="./images/medicos3.svg" alt="medicos">
</section>

<section class="my-32 relative">
  <div class="text-center py-10 text-4xl">
    <h1 class="card-title">¡Acércate a nuestras sucursales</h1>
    <p class="card-text">Es necesario que pidas tu turno</p>
  </div>
  <div class='flex justify-between'>
    <div class="pt-10 flex flex-col gap-16">
      <?php
        $query = "SELECT * FROM sucursales";
        $result_cliente = mysqli_query($conn, $query);
          while ($row = mysqli_fetch_array($result_cliente)) { ?>
        <div class='flex items-center gap-12'>
          <div class="w-[250px] h-[250px] border-2 border-black rounded-full overflow-hidden">
            <img class="w-full h-full objet-cover" src='./images/<?php echo $row['Imagen']?>.jpg' alt='<?php echo $row['Imagen'] ?>'/>
          </div>
          <div class='text-xl'>
            <p><?php echo $row['nombreSucursal'] ?></p>
            <p><?php echo $row['direccionSucursal'] ?></p>
            <p><?php echo $row['numeroSucursal'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>
    <div class="my-32">
      <h1 class='text-2xl pb-10'>Completa nuestro formulario</h1>
      <form class="w-[600px] flex flex-col gap-10" action="admisionCliente.php" method="POST">
        <div class='flex flex-col gap-5'>
          <input type="text" class="border border-black p-4 rounded-md" placeholder="Ingrese Nombre" name="nombreAdmitido">
          <input type="text" class="border border-black p-4 rounded-md" placeholder="Ingrese Apellido" name="apellidoAdmitido">
          <!-- <input type="text" class="border border-black p-4 rounded-md" placeholder="Ingrese Patologia" name="patologia"> -->
          <!-- Reemplaza el campo de texto por el menú desplegable -->
          <select class="border border-black p-4 rounded-md" name="patologia">
            <?php
            // Consulta para obtener las patologías desde la base de datos
            $query_patologias = "SELECT * FROM patologia";
            $result_patologias = mysqli_query($conn, $query_patologias);
            
            // Itera sobre los resultados y genera las opciones del menú desplegable
            while ($row_patologia = mysqli_fetch_assoc($result_patologias)) {
              echo "<option value='".$row_patologia['nombrePatologia']."'>".$row_patologia['nombrePatologia']."</option>";
            }
            ?>
          </select>
          <input type="text" class="border border-black p-4 rounded-md" placeholder="Ingrese Numero" name="numeroAdmitido">
        </div>
        <input type="submit" class="w-48 px-6 py-3 bg-black text-white font-bold rounded-full cursor-pointer" name="guardar_registro" value="Guardar">
      </form>
    </div>
  </div>
  <a class="font-bold absolute -bottom-32 right-0" href="https://www.linkedin.com/in/thomas-vargas-405576214/" target="_blank">Thomas Vargas</a>
</section>
