<?php
$inputLength=$_GET["inputLength"];
$password = "";
$allowedChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789-_';


for ($i = 0; $i < $inputLength; $i++) {
    $randomNumber = rand(0, (strlen($allowedChars)-1));
    $randomChars = $allowedChars[$randomNumber];
    $password .= $randomChars;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1><?php
    echo "la password deve essere lungha ". $inputLength ." caratteri".(strlen($allowedChars)-1);
    ?></h1>
    <h1><?php
    echo "la password è: ". $password ;
    ?></h1>

</body>
</html>