<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <style type="text/css">
        
    </style>
</head>
<body>
<h2>Html working !</h2>
<a href="link002.php">Link002</a> <br/>
<a href="get_var.php?id=2">Link Url id2 Page</a> <br/>
<a href="get_var.php?id=3">Link Url id3 Page</a> <br/>
<a href="get_var.php?id=4">Link Url id4 Page</a> <br/>
<?php $id = $_GET["id"]; // giving quary parameter  ?>
<a href="get_var.php?id=<?php echo $id; ?>">Link Url id Page</a> <br/>

<a href="get_var.php">Link Url Page</a> <br/>
    
<pre><?php echo $id."<br>"; print_r($_GET); ?></pre>

 
    
    
    
    
    
    
    
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>