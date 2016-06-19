<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Form Processing</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
   <style type="text/css">
   </style>
</head>
<body>
  <div class="container">
    <hr>
<pre>
<?php print_r($_POST);

            if (isset($_POST["submit"])) {

              echo "Form Successfully Submited<hr>";

                // set default value normally
                        // if (isset($_POST["username"])) {
                        //   $user = $_POST["username"];
                        // }else{
                        //   $user = "no user";
                        // }
                        //
                        // if (isset($_POST["password"])) {
                        //   $pass = $_POST["password"];
                        // }else{
                        //   $pass = "no pass";
                        // }
                // set default value with tarnary operator
                        $user = isset($_POST["username"]) ? $_POST["username"] : "no_user";
                        $pass = isset($_POST["password"]) ? $_POST["password"] : "no_pass";
            }else{
                $user = "no user";
                $user = "no user";
            echo "{$user} : {$pass}<br>";
            }
?>
</pre>
    <hr>
  </div>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
</body>
</html>
