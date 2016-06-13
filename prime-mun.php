<?php
/*
    $muntasir = 100; // insert your Prime Number here
    $aa = 30;
    $royXx = array("Start Counting");
    while($aa <= $muntasir){
        $hh = 0;
        for($cc = 1; $cc <= $muntasir; $cc++){
            $bb = $aa / $cc;
            $gt = gettype($bb);
            if($gt == "integer"){
                // echo "<p>Number {$aa} / {$cc} gives {$bb} which is {$gt}</p>";
                $hh = $hh + 1;
            }
        }
        if($hh > 2){
            //  echo "Oops, {$aa} is not prime.<br>";
        }else{
            //  echo "Congratulations, {$aa} is a prime number.<br>";
            //  echo "{$aa}, ";
            $royXx[] = $aa;
        }
        $aa++;
    }
    echo "<pre>";
    print_r($royXx);
    echo "</pre>";
*/
    
// find out the Divisors
/*
        $aa = 12;
        echo "Divisors of {$aa} are : ";
        $hh = 0;
        for($cc = 1; $cc <= $aa; $cc++){
            $bb = $aa / $cc;
            $gt = gettype($bb);
            if($gt == "integer"){
                // echo "<p>Number {$aa} / {$cc} gives {$bb} which is {$gt}</p>";
                $hh++;
                if($cc != $aa){
                    echo $cc.", ";
                }else{
                    echo $cc.". ";
                    
                }
            }
        }
    echo "<br>There are {$hh} Divisors of {$aa}.";
*/
    
    
// Prime or not 
/*
        $aa = 90000;
        $hh = 0;
        for($cc = 1; $cc <= $aa; $cc++){
            $bb = $aa / $cc;
            $gt = gettype($bb);
            if($gt == "integer"){
                // echo "<p>Number {$aa} / {$cc} gives {$bb} which is {$gt}</p>";
                $hh = $hh + 1;
            }
        }
        if($hh > 2){
            echo "Oops, {$aa} is not prime.<br>";
        }else{
            echo "Congratulations, {$aa} is a prime number.<br>";
            //  echo "{$aa}, ";
        }
*/
    
//    from Muntasir ********************* bug not fixed
/*
    $koushik = 20100;// insert your starting number
    $range = 20000;
    $muntasir = $range + $koushik;
    $aa = $koushik;
    while($aa <= $muntasir){
        $hh = 0;
        for($cc = 1; $cc <= $muntasir; $cc++){
            $bb = $aa / $cc;
            $gt = gettype($bb);
            if($gt == "integer"){
                // echo "<p>Number {$aa} / {$cc} gives {$bb} which is {$gt}</p>";
                $hh = $hh + 1;
            }
        }
        if($hh > 2){
            // echo "Oops, {$aa} is not prime.<br>";
        }else{
            // echo "Congratulations, {$aa} is a prime number.<br>";
            echo "{$aa}<br>";
    
        }
    
        $aa++;
    }
*/
  
  
  
    
    
// practicing to create prime number findind programm
/*
    $a = 1;
    $prime = 14;
    while($prime >= 1){
        while($a <= 13){
            $vagR = $prime / $a;
            if($vagR == 1 || $vagR == $prime){
                echo "number {$prime} / {$a} = {$vagR} <br>";
            }else{
                break;
            }
            $a++;
        }
        $a = 1;
        $prime--;
    }
*/
// ***************************************************

    
//      echo fmod(5, 5);
//      echo 5 / 5;
   
?>