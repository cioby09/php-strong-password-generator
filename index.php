<?php

$characters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "z", "x", "y", "j", "k", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0", "!", "?", "@", "*", "#", "=", "A", "B", "C", "D", "E", "F", "G", "H", "I", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "Z", "X", "Y", "J", "K"];
$password = [];

if (isset($_GET["psw"]) && $_GET["psw"] !== "") {
    $psw_length = $_GET["psw"];
    var_dump($psw_length);

    $random_index = [];
    while (count($random_index) < $psw_length) {
        $cur_index = rand(0, count($characters));
        $random_index[] = $cur_index;
    };
    var_dump($random_index);

    foreach ($random_index as $i) {
        $password[] = $characters[$i];
    };
    var_dump($password);
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

    <form action="index.php" method="GET">
        <label for="psw">Lunghezza Password</label>
        <input type="number" id="psw" name="psw" max="20" min="6">
        <button type="submit" class="btn btn-primary">Invia</button>
        <button type="reset" class="btn btn-primary">Cancella</button>
    </form>

    <div class="password">
        <?php foreach ($password as $character)
            echo $character
        ?>
    </div>



</body>

</html>