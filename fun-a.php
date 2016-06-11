<!DOCTYPE html>
<html lang="en">
<!--  <head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <title>My Fun PHP</title>-->
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
<!--    <style type="text/css">-->
        
<!--    </style>-->
<!--</head>-->
<body>

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


<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->
<!--</body>-->
</html>