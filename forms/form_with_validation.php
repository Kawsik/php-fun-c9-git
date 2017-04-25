<?php require_once("included_functions.php"); ?>
<?php require_once("validation_functions_only.php"); ?>
<?php
  $pass_errors = array();
  $user_errors = array();
  $output = "";
  if(isset($_POST["submit"])){
    $username = isset($_POST["username"]) ? $_POST["username"] : "" ;
    $password = isset($_POST["password"]) ? $_POST["password"] : "" ;
    
    if(!blank_check($username)){   $user_errors["Blank"] = "Username field can not be blank."; }
    if(!upper_check($username)){   $user_errors["Upper"] = "All charecters must be Capital letter."; }
    
    if(!blank_check($password)){      $pass_errors["Blank"] = "Password field can not be blank."; }
    if(!length_check($password, 6)){  $pass_errors["Length"] = "Password should be more than six charecters."; }
    if(!matching_check($password)){   $pass_errors["Match"] = "Password must not be: 123456."; }
    
    if(!empty($user_errors) || !empty($pass_errors)){
      $message_1 = "Please Solve These Issues:";
      foreach($user_errors as $key => $error){        $output .= "<li>".$error."</li>";      }
      foreach($pass_errors as $key => $error){        $output .= "<li>".$error."</li>";      }
    }else{  $message_1 = "Successfully logged in as: {$username}";}
  }else{

      $username = "";
      $password = "";
      $message_1 = "Please Log in First.";
  }
?>
<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Form Single</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body><hr>
  <div class="container-fluid">
    <form class="col-sm-6" action="form_with_validation.php" method="post">
        <p> Username: <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>">
        </p>
        <p> Password: <input type="password" name="password" value="">
        </p>
        <p>           <input type="submit" name="submit" value="submit">
        </p>
    </form>
    <div class="col-sm-6 bg-danger">
      <hr>
      <ul>
        <p><?php echo $message_1; ?></p>
        <?php print_r($output); ?>
      </ul>
      <hr>
<!--
      <pre class="">
        <?php
        print_r($user_errors);
        echo "<br>";
        print_r($pass_errors);
        ?>
      </pre>
-->
    </div>
  </div>
  <hr>
  <div class="container-fluid">
      <ul class="col-sm-6"><p>Username has some issues:</p>
        <li>Username field can not be blank.</li>
        <li>All charecters must be Capital letter.</li>
        <!-- <li>Sorry your Username already have been taken.</li> -->
      </ul>
      <ul class="col-sm-6"><p>Password has some issues:</p>
        <li>Password field can not be blank.</li>
        <li>Password should be more than six charecters.</li>
        <li>Password must not be: 123456.</li>
      </ul>
  </div>
  <hr>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
</body>
</html>
