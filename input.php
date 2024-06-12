<?php
    $inputLength = $_GET['inputLength'];
    $lettereMinuscole = $_GET['lettereMinuscole'];
    $lettereMaiuscole = $_GET['lettereMaiuscole'];
    $simboli = $_GET['simboli'];
    $noRepeatChars = $_GET['noRepeatChars'];


    $password = "";
    // $allowedChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';

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
        <label>
            <input type="radio" name="lettereMinuscole" placeholder="lettereMinuscole">lettere minuscole
            <input type="radio" name="lettereMaiuscole" placeholder="lettereMaiuscole">lettere Maiuscole
            <input type="radio" name="simboli" placeholder="simboli">simboli
            <input type="radio" name="noRepeatChars" placeholder="noRepeatChars">non ripetere caratteri
        </label>

        <button type="submit">INVIA</button>

        <?php 
        // $password =generatePassword($inputLength,$password,$allowedChars);
        $password =generatePassword($inputLength,$password,$lettereMinuscole,$lettereMaiuscole,$simboli,$noRepeatChars);
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