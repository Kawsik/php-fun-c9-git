<?php
// Febonacchi : CHECK *************************
/*
    $ha_ha = 144;
    $aa = 1;
    $bb = 1;
    $cc = $aa + $bb;
    while($cc <= $ha_ha){
        $aa = $bb;
        $bb = $cc;
        $cc = $aa + $bb;
    }
    if($bb == $ha_ha){
        echo "YES, {$bb} is a Febonacchi Number.";
    }else{
        echo "NO, {$bb} is not a  Febonacchi Number.";
    } 
*/
// *******************************************


// Febonacchi : Find 0 to your input *********
/*
    $ha_ha = 1000; // your input
    $aa = 1;
    $bb = 1;
    $cc = $aa + $bb;
    echo "Febonacchi Nubmers From 0 to {$ha_ha} :<br>";
    echo $aa.", ";
    echo $bb.", ";
    while($cc <= $ha_ha){
        echo $cc;
        $aa = $bb;
        $bb = $cc;
        $cc = $aa + $bb;
        if($cc > $ha_ha){
            echo ".";
        }else{
            echo ", ";
        }
    }
*/
// *******************************************



// Febonacchi : Find 0 to your input ********* array output
/*
    $ha_ha = 1000; // your input
                            $chi = array("Start From Here");
    $aa = 1;
    $bb = 1;
    $cc = $aa + $bb;
    echo "Febonacchi Nubmers From 0 to {$ha_ha} :<br>";
    echo $aa.", ";          $chi[] = $aa;
    echo $bb.", ";          $chi[] = $bb;
    while($cc <= $ha_ha){
        echo $cc;           $chi[] = $cc;
        $aa = $bb;
        $bb = $cc;
        $cc = $aa + $bb;
        if($cc > $ha_ha){
            echo ".";
        }else{
            echo ", ";
        }
    }
    echo "<hr><br>Showing in an array:<br>";
    echo "<pre>";    
                            print_r($chi); 
    echo "</pre><hr>";
*/
// *******************************************



// Febonacchi : Find 0 to your input $ibn ******** given by Muntasir *** edited by me
/*
    $ibn = 100;
    echo "Febonacchi Nubmers From 0 to {$ibn} :<br>";
    $b = 1; $c = 1;
    echo "{$b}, {$c}, ";
    for($a = 1; $a <= $ibn; $a=$b){
        $b = $c;
        $c = $a + $b;
        if($c <= $ibn){
            echo "{$c}, ";
        }
    }
*/
// ****************************************************


// Febonacchi : Find 0 to your input $ibn ************* array output **** given by Muntasir *** edited by me
/*
    $abc=array("Start");
    $b=1;
    $c=1;
    for($a=1; $a <= 10000; $a=$b){ 
        $b=$c; 
        $c = $a + $b; 
        // echo "{$c}<br />"; 
        $abc[] = $c;
    }
    echo "<pre>";
    print_r($abc);
    echo "</pre>";
*/
// ******************************************************


// Febonacchi : Find 0 to your input $ibn ************* array output **** given by Muntasir *** edited by me
/*
    $check_num = 99;
    $abc=array("Start");
    $b=1;
    $c=1;
    for($a=1; $a <= 100; $a=$b){ 
        $b=$c; 
        $c = $a + $b; 
        // echo "{$c}<br />"; 
        $abc[] = $c;
    }
    echo "<pre>";
    print_r($abc);
    echo "</pre>";
    $temp = in_array($check_num, $abc);
    if($temp == true){
        echo "Congratulations";
    }else{
        echo "Your Wife is Dead";
    }
*/
// ******************************************************


?>