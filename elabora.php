<?php
// function generatePassword($inputLength,$password,$allowedChars ){

//     for ($i = 0; $i < $inputLength; $i++) {
//         $randomNumber = rand(0, (strlen($allowedChars)-1));
//         $randomChars = $allowedChars[$randomNumber];
//         $password .= $randomChars;
//     }
//     return $password;
// }



function generatePassword($inputLength,$password,$lettereMinuscole,$lettereMaiuscole,$simboli,$noRepeatChars){

    $warehouse="";

    if ($lettereMinuscole) {
        $warehouse .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($lettereMaiuscole) {
        $warehouse .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($simboli) {
        $warehouse .= '-_';
    }

        if(!$noRepeatChars){
            for ($i = 0; $i < $inputLength; $i++){
                    $randomNumber = rand(0, (strlen($warehouse)-1));
                    $randomChars = $warehouse[$randomNumber];
                    $password .= $randomChars;
                }
            return $password;  
        }else{
            for ($i = 0; $i < $inputLength; $i++){
                $randomNumber = rand(0, (strlen($warehouse)-1));
                $randomChars = $warehouse[$randomNumber];
                if (strpos($password, $randomChars) === false) {
                    $password .= $randomChars;
                }
            }
            return $password;  
        }
      
}
?>
