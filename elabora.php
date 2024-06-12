<?php
function generatePassword($inputLength,$password,$allowedChars ){

    for ($i = 0; $i < $inputLength; $i++) {
        $randomNumber = rand(0, (strlen($allowedChars)-1));
        $randomChars = $allowedChars[$randomNumber];
        $password .= $randomChars;
    }
    return $password;
}
?>
