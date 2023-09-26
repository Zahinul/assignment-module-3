<?php
    
    function convertText($text,$search,$replace){  //function to convert text 
        $textlower = strtolower($text); //lower case given string
        $replacedText = str_replace($search,$replace,$textlower); //replace specific part with desired part
        return $replacedText;
    }
    $text = "The quick brown fox jumps over the lazy dog.";
    $search = "brown";
    $replace = "red";
    $newText = convertText($text,$search,$replace); // convert to get desired text
    echo $newText; //print the text
?>