<?php
    $scope = "Outside";
    
    function test(){
        global $scope;
        echo $scope."<br>";
        $scope = "Inside";
    }
    
    echo $scope."<br>";
    test();
    echo $scope."<br>";
    
?>