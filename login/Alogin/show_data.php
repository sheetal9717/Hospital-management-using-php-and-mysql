<html>
  <head>
	<title>Admin Login Page</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="Alogin.css" rel="stylesheet" id="bootstrap-css">
<script src="../js/bootstrap.min.js"></script>
<script src="../jquery-3.3.1.slim"></script>

  </head>
<body id="LoginForm">
<div class="container">
<div class="login-form"><br><br><br><br>
<div class="main-div">
    <div class="panel">
   <h2>Admin Login</h2><br>
   </div>
    <form action = "../../Admin/Doctor/DoctorRegistration.php" method = "POST">
        <button type="submit" class="btn btn-primary">Doctor's Registration</button>

    </form>
	<form action = "../../Admin/Nurse/NurseRegistration.php" method = "POST">
        <button type="submit" class="btn btn-primary">Nurse's Registration</button>

    </form>
    </div>
</div></div>


</body>
</html>
