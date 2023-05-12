<?php
session_start();
include_once __DIR__ . '/functions.php';

foreach ($password as $character) {
    $my_password .= $character;


    $_SESSION['my_password'] = $my_password;
    header("Location: result.php");
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP Password</title>
</head>

<body>

    <form class="container text-center mt-5" action="index.php" method="GET">
        <label for="psw">Lunghezza Password</label>
        <input type="number" id="psw" name="psw" max="30" min="10" value="<?php ?> ">
        <div class="my-5">
            <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck1">Lettere</label>

            <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck2">Simboli</label>

            <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck3">Numeri</label>
        </div>

        <button type="submit" class="btn btn-primary"> Invia</button>
        <button type="reset" class="btn btn-primary">Cancella</button>
    </form>

</body>

</html>