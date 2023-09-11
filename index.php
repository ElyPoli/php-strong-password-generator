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

            <!-- Form -->
            <div class="d-flex align-items-center justify-content-center pb-5">
                <div class="d-flex align-items-center justify-content-center">
                    <form method="GET" action="password.php">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-white fw-bold fs-5">Enter the password length:</label>
                            <input type="number" class="form-control" name="length">
                        </div>
                        <div class="form-check pe-2">
                            <input class="form-check-input" type="checkbox" name="repeat">
                            <label class="form-check-label text-center text-white fw-bold" for="flexCheckChecked">
                            Allow repetition of the same characters
                            </label>
                        </div>
                        <p class="m-0 pt-3 pb-1 text-center text-white fw-bold fs-5">What characters do you want to include?</p>
                        <div class="d-flex align-items-center justify-content-center pt-2">
                            <div class="form-check pe-2">
                                <input class="form-check-input" type="checkbox" name="number">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Numbers
                                </label>
                            </div>
                            <div class="form-check pe-2">
                                <input class="form-check-input" type="checkbox" name="lowercase">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Lowercase letters
                                </label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pt-2 pb-2">
                            <div class="form-check pe-2">
                                <input class="form-check-input" type="checkbox" name="uppercase">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Uppercase letters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="symbols">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Special symbols
                                </label>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-center pt-4">
                            <button type="submit" class="btn btn-secondary fw-bold text-uppercase">generate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>