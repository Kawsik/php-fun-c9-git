<?php
// check if it is Febonacchi or not hello
    $ha_ha = 144;
    $aa = 1;
    $bb = 1;
    $cc = $aa + $bb;
    // echo $aa.", ";
    // echo $bb.", ";
    while($cc <= $ha_ha){
        // echo $cc.", ";
        $aa = $bb;
        $bb = $cc;
        $cc = $aa + $bb;
    }
    if($bb == $ha_ha){
        echo "Wow, {$bb} is a Febonacchi Number. Your Wife is Beautiful";
    }else{
        echo "Oops, not Febonacchi. Your Wife is Dead.";
    }



// Find Out the Febonacchi number
/*
    $ha_ha = 10000000000000;
    $aa = 1;
    $bb = 1;
    $cc = $aa + $bb;
    echo $aa.", ";
    echo $bb.", ";
    while($cc <= $ha_ha){
        echo $cc.", ";
        $aa = $bb;
        $bb = $cc;
        $cc = $aa + $bb;
    }

*/

    //   $b=1; $c= 1;
      
    //   for($a=1; $a <= 1000; $a=$b){
    //     $b=$c;
    //     $c  = $a + $b;
    //     echo $c.", ";

    //     }



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
    
/*    from Muntasir
    $koushik = 20000100;// insert your starting number
    $range = 20000000;
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
    
//      echo fmod(5, 5);
//      echo 5 / 5;
    
    
?>