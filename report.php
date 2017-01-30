<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registration Form</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="http://localhost/tenant/index.html">Tenant Information portal</a>
            </div>
            <div class="nav navbar-right top-nav">
            <ul class="nav navbar-nav">
              <li class="active"><a href="http://localhost/tenant/login.php">Home</a></li>

              <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Admin User <b class="caret"></b></a>
                          <ul class="dropdown-menu">
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                              </li>
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                              </li>
                          </ul>
                      </li>
            </ul>
          </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li>
                        <a href="#" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i>Admin<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                          <li >
                      <a href="http://localhost/tenant/dashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                  </li>
                  <li>
                      <a href="http://localhost/tenant/policereg.php"><i class="fa fa-fw fa-bar-chart-o"></i>Register</a>
                  </li>
                        </ul>
                    </li>
            <li><a href="http://localhost/tenant/report.php">Reports</a></li>
         </ul>
        </div>
      </nav>
</body>
</html>
