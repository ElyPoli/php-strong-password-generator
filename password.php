<?php
include __DIR__ . "/functions.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 47: PHP Strong Password Generator</title>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Icone FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- Icona -->
    <link rel="icon" href="img/icon-logo.png">

    <!-- Custom css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main class="bg-primary vh-100 d-flex align-items-center justify-content-center">
        <div class="container text-white">
            <h1 class="fw-bold text-secondary text-center m-0 pb-5">
                PHP Strong Password Generator
            </h1>

            <!-- Password random -->
            <div class="d-flex align-items-center justify-content-center">
                <div class="box-password">
                    <h4 class="text-white text-center">Password generated:</h4>
                    <p class="text-secondary text-center fs-5 m-0">
                        <?php
                        echo (isset($_SESSION['password']) && $_SESSION['password'] !== '') ? $_SESSION['password'] : "errore: password non generata";
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>