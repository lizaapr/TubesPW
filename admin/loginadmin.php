
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form action="login.php" method="POST">
            <div class="form-group">
                <input type="Email" id="inputEmail" class="form-control" placeholder="Email" name="email" required="required">
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required="required">
              </div>
              <br>
            <input class="btn btn-primary btn-success btn-block " type="submit" value="Login" name="login">
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
 
<?php  
      
    include("../include/config.php");  
      
    if(isset($_POST['login']))  
    {  

        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql="SELECT * from adminn where email='$email' AND password='$password'";  
        $result = mysqli_query($conn, $sql); 
              
        if(mysqli_num_rows($result) > 0)  
        {  
            while($row = mysqli_fetch_assoc($result))
            {
                $id_admin = $row["id_admin"];
                $admin = $row["email"];
                session_start();
                $_SESSION['id_admin'] = $id_admin;
                $_SESSION['admin'] = $admin;
            }
            header("Location: index.php");
                  
        }  
        else  
        {  
          echo "<script>alert('Email or password is incorrect!')
          </script>";  
        }  
    }  
?>