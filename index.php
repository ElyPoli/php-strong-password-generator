<?php
// Lunghezza password selezionata
$password_length = $_GET["length"] ?? '0';

// Creo i diversi array separati
$alphabet_lowercase = range('a', 'z');
$alphabet_uppercase = range('A', 'Z');
$number = range(0, 9);
$symbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ':', ';', '<', '>', ',', '.', '?', '/'];

// Unisco tutti gli array in uno unico
$array_character_set = array_merge($alphabet_lowercase, $alphabet_uppercase, $number, $symbols);

// Estraggo casualmente tot elementi dall'array totale
$random_password_generated = '';
for ($i = 0; $i < $password_length; $i++) {
    $random_password_generated .= $array_character_set[rand(0, count($array_character_set) - 1)];
}
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
    <div class="container">
        <!-- Form -->
        <form method="GET" class="mt-5">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Lunghezza password:</label>
                <input type="number" class="form-control" name="length">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <!-- Password random -->
        <p class="mt-5">
            <?php echo $random_password_generated ?>
        </p>
    </div>
</body>

</html>