<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Fun PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        h2{font-size:1em;}
    </style>
</head>
<body> <div class="container">



<?php    $errors = array();


// echo "<hr><h2>isset or not and empty or not</h2>";
    $check_a = "dfdf";
    if(!isset($check_a) || empty($check_a)){
    //    echo "please insert correctly";
        $errors["Blank check"] = "Data field cann't be blank.";
    }

// echo "<hr><h2> charecter length required minimum </h2>";
    $check_b = "royroy";
    $needed = 6;
    if(strlen($check_b) < $needed){
    //    echo "please insert correctly";
        $errors["Minimum Length check"] = "Please Insert More then six charecters.";
    }

// echo "<hr><h2> input type matching </h2>";
    $check_c = "dsfsd";
    if(!is_string($check_c)){
    //    echo "please insert correctly";
        $errors["String check"] = "Field must have alphabetical charecters.";
    }

// echo "<hr><h2> matching in array </h2>";
    $check_d = 1273;
    $matching = array("123", "4", "1111");
    if(in_array($check_d, $matching)){
    //    echo "please insert correctly";
        $errors["Matching or not"] = "Your inserted data nust not have any of these: '123', '4', '1111'.";
    }

// echo "<hr><h2> if it does not exist in the inserted value </h2>";
    $check_e = "habijabi@lala.com";
    if(!preg_match("/@/", "$check_e")){
    //    echo "please insert correctly";
        $errors["Special Charecters check"] = "Your email address must contain '@'";
    }
?>
<hr>
<pre>
    <?php print_r($errors); ?>
</pre>
<hr>
<p class="text-center">
    <?php
        if(!empty($errors)){
            echo "Oops";
        }else{
            echo "Seccess";
        }
    ?>
</p>
<hr>

<br><br><br></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>