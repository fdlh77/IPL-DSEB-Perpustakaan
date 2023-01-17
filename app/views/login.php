<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>HOLY LIBRARY</title>
 <link href="<?= BASE_URL ?>/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="<?= BASE_URL ?>/assets/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= BASE_URL ?>/assets/font-awesome/css/font-awesome.min.css">
  </head>

  <body style=" background-color:#B0C4DE;background-image:url(<?= BASE_URL ?>/assets/logo/); background-repeat:no-repeat; background-position: 1px 1px; ">

<br><br><br><br><br><br><br><br><br>
<div class="col-md-4 col-md-offset-4 form-login">

<div class="panel-heading" style="align:center;">
    <div class="login-form">
       
     <h1 style="text-align: center;">L O G I N</h1>
     
</div>
<div class="panel-body">
     <form action="<?= BASE_URL ?>/auth/login" method="POST">
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username" id="username" name="username">
       
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="password" name="password">
       
     </div>
     <div class="form-group ">
                    <select name="level" class="form-control" id="level"required>
                    <option value="">Level</option>
                    <option value="admin">Administrator</option>
                    </select>
                </div>
               
     
                <div class="col-md-offset-4">
    
     <input type="reset" class="btn btn-danger" name="reset" >
      <input type="submit" class="btn btn-success" name="login" value="Login" >
   </div>
   <div class="text-center forget">
    <!--<p>Forgot Password ?</p>-->
</form>
</div>
</div>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>