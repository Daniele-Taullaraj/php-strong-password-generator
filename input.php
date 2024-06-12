<?php
    $inputLength = $_GET['inputLength'];
    $password = "";
    $allowedChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';

    include 'elabora.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>
<body>
    <form action="input.php" method="GET">
        <h2>GENERATORE DI PASSWORD</h2>
        <h4>Inserisci il numero di caratteri per la generazione della password:</h5>
        <input type="number" name="inputLength" placeholder="lunghezza password">
        <button type="submit">INVIA</button>

        <?php 
        $password = generatePassword($inputLength,$password,$allowedChars);
         ?>
        <h3><?php
            echo "la password deve essere lungha ". $inputLength ;
        ?></h3>
        <h3><?php
            echo "la password è: ". $password ;
        ?></h3>


    </form>
    
</body>
</html>