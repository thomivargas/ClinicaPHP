<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clinica Medica</title>
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

<body class="anta-regular">
  <div class="w-[80%] max-w-[1400px] mx-auto">
    <header class="flex justify-between py-5">
      <div class="flex gap-2 items-end cursor-default">
        <img class='w-8' src="./images/Fasolid.svg" alt="pasti">
        <h1 class='text-3xl cursor-default'>Clinica TH</h1> 
      </div>
      <nav class='flex gap-3 items-center'>
        <a class="px-5 py-3 bg-black text-white rounded-full font-bold" href="login\indexLogin.php">Iniciar Sesion</a>
        <a class="px-5 py-3 border-2 border-black rounded-full font-bold" href="#">Registrate</a>
      </nav>
    </header>

