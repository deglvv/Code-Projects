<?php
    #made by deglvv
    # echo: print out (<br/> means next line)
    echo "hola mundo", '<br/>'; # strings
    echo TRUE, '<br/>'; echo FALSE, '<br/>'; #booleans
    echo 10, '<br/>'; #integers
    echo 3.2, '<br/>'; #doubles

    #var_dumb( type ): show type
    var_dump('$');

    # $var : save and read a var calling with $ + name
    echo '<br/>';
    $name = "deglvv";
    echo $name;
    echo '<br/>';

    # const CONST : save a constant which will have the same value in all the proccess
    const surname = "Bv";
    echo surname;
    echo '<br/>';
    
    # $array = [] : to declare a var as an array, which will save many values
    $places = ["house","school", "work","jail"]; #by number
    echo $places[2];
    echo '<br/>';
    $client = ["name" => "tumama69", "age" => 24, "exp" => FALSE]; #by item
    echo $client["name"];
    echo '<br/>';
    $items = [["water","sodas","oil"],["snacks"]]; #bidimentional
    echo $items[0][1];
    echo '<br/>';
    $client2 = ["name" => "tumama68", "age" => 42, "exp" => TRUE, "courses" => ["C#","SQL","PHP"]]; #mixed
    echo $client2["courses"][2];
    echo '<br/>';
    $client["courses"] = ["pseint", "no more", "what should i put here"]; #adding more items
    echo $client["courses"][2];
    echo '<br/>';
    
    # count( $array ) : count how many elements an array have
    $cant_places = count($places);
    echo count($client2);
    echo '<br/>';
    echo count($client2, COUNT_RECURSIVE); #for multidimentionals
    echo '<br/>';

    #Concatenation : link two strings
    $fullname = $name.surname;
    echo $fullname;
    echo '<br/>';
    echo "My name is ".$name.", I live in a ".$places[0];
    echo '<br/>';
    #Interpolation : insert one string in other
    echo "My name is $name, I live in a $places[0]";
    echo '<br/>';
    echo 'My name is $name, I live in a $places[0]';
    echo '<br/>';

    #OPERATORS: () ** * /  + -  %
    $lastage = $client["age"] ** 2 / 4;
    $lastyear = 2024 - $client["age"] + $lastage;
    echo "I will die in $lastyear";
    echo '<br/>';
     
    #ASIGNATE OPERATORS: += -= /= *= .=
    $myheartbeatafseeingyou = 120;
    $myheartbeatafseeingyou *= 1.5;
    $myheartbeatafseeingyou /= 12 / 10;
    $myheartbeatafseeingyou .= " bpm, im on fire";
    echo $myheartbeatafseeingyou;
    echo '<br/>';

    #ASIGNATE by &reference: & + $var will asign a value witch will change when the value is changed
    $age = 23;
    $bornage = &$age;
    echo $bornage;
    echo '<br/>';
    $age = 12;
    echo $bornage;
    echo '<br/>';

    #COMPARATIVE OPERATORS: (==)  (!=  <>)  (===)  (!==) (< <=) (> >=)
    var_dump($age == "12"); #true
    var_dump($age === "12"); #false, not identic type
    echo '<br/>';

    #LOGIC OPERATORS: (and &&) (or ||) (!) 
    var_dump($lastyear > 2000 and $lastage != $age); #true
    echo '<br/>';

    #INCREMENT AND DECREMENT OPERATORS: (++$var)  (--$var)  ($var++)  ($var--)
    echo $age++; echo '<br/>';
    echo $age; echo '<br/>';
    echo ++$age; echo '<br/>';

    #IF CONDITIONAL: do code if the conditional is true
    if ($name == "deglvv") {
        echo "diegod when livesatan walk in";
        echo '<br/>';
    }
    #ELSE CONDITIONAL: do code if the conditional is false
    if ($name == "deglvv") { }
    else {
        echo "who are you? a fucking spy?";
        echo '<br/>';
    }
    #TERNARY OPERATOR: simple line if-else conditional [a?b:c]
    $texttt;
    ($name != "Bv") ? $texttt = "nice name" : $texttt = "uggh";
    echo $texttt;
    echo '<br/>';
    #ELSEIF CONDITIONAL: do code if the last condition is the actual condition is true
    if($age <12){
        echo "i dont have mobile games";
    } elseif($age <18){
        echo "i dont have money";
    } else{
        echo "i dont have time";
    }
    echo '<br/>';
    #SWITCH CONDITIONAL: do code if a variable is as same as one of the cases
    switch (random_int(1,5)){
        case 1:
            echo "Number one !!!";
            break;
        case 2:
            echo "loser";
            break;
        default:
            echo "nice try!";
    }
    echo '<br/>';
    #MATCH CONDITIONAL: do code if a variable is identify as one of the cases
    $xd = match (random_int(1,5)) {
         1 => "nniceee!!!!",
         2 => "loser again",
         default => "well well well",
    };
    echo $xd;
    echo '<br/>';
    #WHILE CICLE: while the condition is true, repeat the code
    $countdown = 5;
    while ($countdown > 0){
        echo $countdown--.", ";
    }
    echo '<br/>';
    #DO WHILE CICLE: do the code while the condition is true
    $countdown = 5;
    do {
        echo $countdown--.", ";
    } while ($countdown > 0);
    echo '<br/>';
    #FOR CICLE: do the code in a limited number of times
    for ($i = 1; $i < 5; $i++){
        echo ($i * 2)."<br>";
    }
    #FOREACH CICLE: do code for each element from an array
    foreach($places as $valor){
        echo "I visited $valor loong ago, it was boring<br>";
    }
    # "break" keyword finish a cicle any moment you want to

    #INCLUDE AND REQUIERE PHP FILE: do the code writed in a php.file (if the file doesnt exists, include may warn and requiere may crash the code)
    include "calculator.php";
    require "calculator.php";
    #INCLUDE AND REQUIERE ONCE: do the code writed only once moment in all the code
    require_once "calculator.php"; #this dont execute 'cause it was executed before

    #FUNCTIONS : do part of code with none or more parameters to change the proccess
    function mathpow($a, $b){
        return $a ** $b;
    }
    function greeting(){
        echo "Hi!!!!<br>";
    }
    echo mathpow(3,3)."<br>";
    greeting();
    #INCLUDE FUNCTIONS FROM OTHER PHP FILES: yea ofc
    include "functions.php";
    $text = title("the game");
    $text .= listfromarray($places);
    echo $text."<br>";

    # strtoupper($string) : make a string UPPERCASE
    # strtolower($string) : MAKE A STRING lowercase
    # strlen( $string) : get the length of a string on int
    # $array = explode( $char , $string) : divide a string excluding the $char and saving it in a $array
    /*
    Pow(a,b) == a**b;    Sqrt(a) = root from a;
    floor(4.5) == 4;     ceil(4.5) == 5;
    rand(a,b) == <a;b>;  round(4.5) == 5;
    */


    # number_format($number,$numdecimals,$decimalsep,$thousandsep);
    # date_default_time_set("");    date();
    # hash("algort",$string) : encrypt a text;
    # pasword_hash($password, PASSWORD_DEFAULT): encrypt a password;
    # password_verify( $password, $hash): compare a hash and a password;

    # $var = $_GET['var'] method : put the page properties in the URL
    # $var = $_POST['name'] method : put a clean URL.

    # is_null($var) : check if a var is null
    # unset($var) : clear the value of a var
    # empty($var) : check if a var have the base value
    # isset($var) : check if a var is set and is not null
?>