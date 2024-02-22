<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
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
<body class="anta-regular relative h-screen w-screen flex justify-center items-center">
    <a class="absolute top-5 left-5 font-bold text-3xl p-5 flex gap-3 items-center" href="../index.php">
        <img src="../images/IonArrowBack.svg" alt="back">
    </a>
    <div class="div">
        <form action="validar.php" method="POST" class="w-[450px] py-5 px-7 border-2 border-black rounded-xl">
            <div class="py-4 flex flex-col items-center">
                <img class='p-2 border-4 border-black rounded-full' src="../images/doctorIcon.svg" alt="doctorIcon">
                <h2 class="text-xl font-semibold mt-2">Login Admin</h2>
            </div>
            <div class='w-full py-4 flex flex-col gap-5 items-center'>
                <div class='w-full flex flex-col gap-2'>
                    <label for="usuario"><b>Nombre de usuario</b></label>
                    <input class='mt-2 p-2 bg-gray-300 rounded-md' type="text" placeholder="Ingrese su nombre de usuario" name="usuario" id="usuario" required>
                </div>
                <div class='w-full flex flex-col gap-2'>
                    <label for="password"><b>Contraseña</b></label>
                    <input class='my-2 p-2 bg-gray-300 rounded-md' type="password" placeholder="Ingrese su contraseña" name="password" id="password" required>
                </div>
                <button class="w-48 px-6 py-3 bg-black text-white font-bold rounded-full cursor-pointer" type="submit">Iniciar sesión</button>  
            </div>
        </form>
    </div>
</body>
</html>