<!DOCTYPE html>
<html lang="en">
<head>
 <title>Bootstrap Example</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="css/style.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="http://localhost/tenant/index.html">Tenant Information portal</a>
      </div>
      <div class="nav navbar-right top-nav">
      <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/tenant/login.php">Home</a></li>
        <li><a href="http://localhost/tenant/admin.php">Admin</a></li>
      </ul>
    </div>
  </div>
  </nav>
  <form class="form-horizontal col-lg-offset-2 col-md-offset-2 col-sm-offset-2 col-lg-8 col-md-8 col-sm-8 ">
    <div class="container-fluid">
      <div class="panel panel-primary">
      <div class="panel panel-header">
    <h3>Admin Login</h3>
     </div>
      <div class="panel panel-body ">
    <div class="col-lg-10 col-md-10 col-sm-10 ">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Police Name</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="oname" id="name" >
      </div>
    </div>
    <br/>
    <br/>
    <div class="col-lg-10 col-md-10 col-sm-10">
      <label class="control-label col-lg-4 col-md-4 col-sm-4" for="name">Badge Id</label>
      <div class="col-lg-8 col-md-8 col-sm-8 ">
          <input type="text" class="form-control" name="oname" id="name" >
      </div>
    </div>
    <br/>
    <br/>
    <br/>
    <div class="col-sm-2 col-md-2 col-lg-2 col-lg-offset-5 col-md-offset-5 col-sm-offset-5 col-xs-offset-1  btn-lg-2">
      <a href="http://localhost/tenant/dashboard.php" button type="submit" class="btn btn-success btn-md">Login</button></a>
    </div>
     </div>
   </div>
  <br/>
  <br/>
<br/>
</div>
</form>
</body>
</html>
