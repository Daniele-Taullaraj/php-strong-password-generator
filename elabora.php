<?php
$inputLength=$_GET["inputLength"];
$password = "";

for ($i = 0; $i < $inputLength; $i++) {
    $password .= "X";
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
    echo "la password deve essere lungha ". $inputLength ." caratteri";
    ?></h1>
    <h1><?php
    echo "la password è: ". $password ;
    ?></h1>

</body>
</html>