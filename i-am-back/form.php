<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Form</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<form class="container" action="form_process.php" method="post">
<div class="form-group row">
<label for="example-text-input" class="col-2 col-form-label">Text</label>
<div class="col-10">
        <input class="form-control" type="text" name="username" value="">
</div>
</div>
<div class="form-group row">
<label for="example-password-input" class="col-2 col-form-label">Password</label>
<div class="col-10">
        <input class="form-control" type="password" name="password" value="">
</div>
</div>
        <input class="btn-primary" type="submit" name="submit" value="Submit">
</form>
</body>
</html>