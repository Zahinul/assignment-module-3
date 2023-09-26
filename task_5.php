<?php
    function generatePassword($length){  //function to generate random password of $length
        $characterSet = [                //contains each type of chars
            "lower" => "abcdefghijklmnopqrstuvwxyz",
            "upper" => "ABCDEFGHIJKLMNOPQRSTUVWXYZ",
            "digits" => "0123456789",
            "special" => "!@#$%^&*()_+",
        ];
        $password ="";
        $len =0;
        while($len<$length){
            foreach($characterSet as $chrType){ //looping through characterSet to get elements from each type of chars
                        $chrLen = strlen($chrType);
                        $password .= $chrType[rand(0,$chrLen-1)]; 
                        $len++;
            }
        }
        $password = str_shuffle($password);  //shuffle the generated password

        $plen=strlen($password); // count the length of generated password
        if($plen>$length){  // if password length is greater than desired length, trim it using substr() 
            $trimmedPW = $password;
            $trimmedPW=substr($password,0,$length);
            return $trimmedPW;
        }else{
            return $password;
        }
   
    }
    $passwordlength = 12; //specified length
    $newPassword = generatePassword($passwordlength); //call generatePassword() to create random password
    echo $newPassword; //print the new password

?>