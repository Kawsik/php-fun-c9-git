<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Form</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body> <div class="container">
    
<pre>
<?php    print_r($_POST);
$text = $_POST[username];
$pass = $_POST[password];
$done = $_POST[submit];
?>
</pre>
<p class="display-4"> Username is: <?php print_r($text); ?></p>
<p class="display-4"> Password is: <?php print_r($pass); ?></p>
<p class="display-4"> Submitted: <?php print_r($done); ?></p>

