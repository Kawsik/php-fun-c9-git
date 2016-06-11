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

?>