<?php
    // function gun_gun($me1, $me2){
    //     $full_me = $me1 + $me2;
    //     return $full_me;
    // }
    
    // $new1 = gun_gun(5,8);
    // echo $new1." and ".$full_me."<br>";
    
    
    
    // function add($var1, $var2){
    //     $var1 + $var2;
    //     return $sum;
    // }
    // echo add(5,9);
    // $result1 = add(4,5);
    // $result2 = add(4,$result1);
    // echo $result2;
    
   
    
    
    
    function febonacchi($ha_ha){
        $aa = 1;
        $bb = 1;
        $cc = $aa + $bb;
        $yah = null;
        $nop = null;
        while($cc <= $ha_ha){
            $aa = $bb;
            $bb = $cc;
            $cc = $aa + $bb;
        }
        if($bb == $ha_ha){
            $yah = "YES, {$ha_ha} is a Febonacchi Number.";
        }else{
            $nop = "NO, {$ha_ha} is not a  Febonacchi Number.";
        }
        // return $yah;
        // return $nop;
        return array($yah, $nop);
        // return $aa;
        // return $bb;
        // return $cc;
    }
    $calling = febonacchi(145);
        echo $calling[0];        
        echo $calling[1];


    
    
    
    
    
    
    
    
    
?>