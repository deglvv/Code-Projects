<?php
    function title($title){
        return "==============================<br>".$title."<br>==============================<br>";
    }
    function listfromarray($array){
        $text = "";
        $i = 1;
        foreach($array as $value){
            $text .= "$i. $value <br>";
            $i++;
        }
        return $text;
    }
?>