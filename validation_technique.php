<?php
echo "<hr><h2>isset or not and empty or not</h2>";
    $check_a = "a"; // or not >> !isset = false >> empty = true
    // or not >> !isset = true >> empty = true
    if(!isset($check_a) || empty($check_a)){
        echo "please insert correctly";
    }else{
        echo "thank you";
    }

echo "<hr><h2> chacter length required minimum </h2>";
    $check_b = "roy";
    $needed = 6;
    if(strlen($check_b) < $needed){
        echo "please insert correctly";
    }else{
        echo "thank you";
    }

echo "<hr><h2> input type matching </h2>";
    $check_c = 123;
    if(!is_string($check_c)){
        echo "please insert correctly";
    }else{
        echo "thank you";
    }

echo "<hr><h2> matching in array </h2>";
    $check_d = 1234;
    $matching = array("123", "4", "1111");
    if(in_array($check_d, $matching)){
        echo "please insert correctly";
    }else{
        echo "thank you";
    }

echo "<hr><h2> if it does not exist in the inserted value </h2>";
    $check_e = "habijabi@lala.com";
    if(!preg_match("/@/", "$check_e")){
        echo "please insert correctly";
    }else{
        echo "thank you";
    }
    
?>