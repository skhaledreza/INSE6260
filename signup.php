<!DOCTYPE html>
<html>
<head>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

  <title> INSE 6260</title>
</head>



<body>

  <br>
  <br>
  <form class="form-horizontal" action='signup_controller.php' method="POST">

    <fieldset>
      
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Fist Name</label>
        <div class="col-lg-5">
          <input type="text" name= "first_name" class="form-control" id="first_name" placeholder="fist_name">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Last Name</label>
        <div class="col-lg-5">
          <input type="text" name= "last_name" class="form-control" id="last_name" placeholder="last_name">
         </div> 
         </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-5">
          <input type="text" name= "username" class="form-control" id="username" placeholder="username">
        </div>
      </div>


      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-5">
          <input type="password" name= "password" class="form-control" id="password" placeholder="password">
        </div>
      </div>

      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-5">
          <input type="text" name= "email" class="form-control" id="email" placeholder="email">
        </div>
        </div>

      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Phone Number</label>
        <div class="col-lg-5">
          <input type="text" name= "phone" class="form-control" id="phone" placeholder="phone">
        </div>
      </div>
      
      <div class="form-group">
        <label for="inputPassword" class="col-lg-2 control-label">Address</label>
        <div class="col-lg-5">
          <input type="text" name= "address" class="form-control" id="address" placeholder="address">
           </div>
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <button type="reset" class="btn btn-default">Cancel</button>
          <button type="submit" class="btn btn-primary">Submit</button>

        </div>
      </div>

    </fieldset>
  </form>

</body>