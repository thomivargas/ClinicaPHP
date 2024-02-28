<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinica Medica - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      .anta-regular {
        font-family: "Anta", sans-serif;
        font-style: normal;
      }
    </style>
</head>

<body class='anta-regular'>
<div class="flex">  
  <nav class="bg-black w-[400px] h-screen text-white p-10">
    <div class='h-full flex flex-col justify-between'>
      <div class="flex flex-col gap-20">

        <div class="flex gap-2 items-end cursor-default">
          <img class='w-8 invert' src="../images/Fasolid.svg" alt="pasti">
          <h1 class='text-3xl cursor-default'>Clinica TH</h1> 
        </div>
  
        <ul id="navbarSupportedContent" class="flex flex-col gap-5">
          <a class="hover:text-gray-400" href="../vistaCliente.php">Home</a>
          <a class="hover:text-gray-400" href="../crudPacientes/createPacientes.php">Pacientes</a>
          <ul class="flex flex-col gap-3 pl-20">
            <a class="<?= ($_SERVER['PHP_SELF'] == '/Finallp2/crudPacientes/createPacientes.php') ? 'text-sky-500' : 'text-white' ?>" href="createPacientes.php">Crear nuevo paciente</a>
            <a class="<?= ($_SERVER['PHP_SELF'] == '/Finallp2/crudPacientes/readPaciente.php') ? 'text-sky-500' : 'text-white'; ?>" href="readPaciente.php">Mostrar Pacientes</a>
            <a class="<?= ($_SERVER['PHP_SELF'] == '/Finallp2/crudPacientes/updatePaciente.php') ? 'text-sky-500' : 'text-white'; ?>" href="updatePaciente.php">Editar</a>
            <a class="<?= ($_SERVER['PHP_SELF'] == '/Finallp2/crudPacientes/deletePaciente.php') ? 'text-sky-500' : 'text-white'; ?>" href="deletePaciente.php">Eliminar</a>
          </ul>
          <a class="hover:text-gray-400" href="../crudMedicos/createMedico.php">Medicos</a>
          <a class="hover:text-gray-400" href="../crudTurnos/createTurno.php">Turnos</a>
          <a class="hover:text-gray-400" href="../crudSucursales/createSucursal.php">Sucursales</a>
          <a class="hover:text-gray-400" href="../admisionCliente/readAdmision.php">Admision</a>
        </ul>
      </div>   
      <a class="hover:text-gray-400" href="../logout.php">Cerrar sesión</a>               
    </div>
  </nav>
