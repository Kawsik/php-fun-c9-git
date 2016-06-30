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
<body> <div class="jumbotron">
<?php
$pass = "fs2fsd2@f1sd2f";
    function blank_check($value){
        return isset($value) && !empty($value);
    }
    function length_check($value){
        return strlen($value) > 6;
    }
    function string_check($value){
        return is_string($value);
    }
    function matching_check($value){
        return !in_array($value, array("123", "4", "1111", "123456789"));
    }
    function special_char($value){
        return strstr($value, "@") || strstr($value, "^") || strstr($value, "%") || strstr($value, "&");
    }
    if(blank_check($pass)){     echo "submitted: ".$pass; }else{ echo "can not be empty"; }
echo "<br>";
    if(length_check($pass)){    echo "submitted: ".$pass; }else{ echo "must have more than six charechters"; }
echo "<br>";
    if(string_check($pass)){    echo "submitted: ".$pass; }else{ echo "must have alphabate"; }
echo "<br>";
    if(matching_check($pass)){  echo "submitted: ".$pass; }else{ echo "must not have 123, 4, 1111, 123456789"; }
echo "<br>";
    if(special_char($pass)){    echo "submitted: ".$pass; }else{ echo "must have any of @, ^, &, %"; }
?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>