<?php
//include function page
include_once('lib/function/userFunction.php');

if(isset($_POST['btnlogin'])){
    $result = Authentication($_POST['userName'],$_POST['userPass']);
    echo($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Entry</title>
     <!--Link bootstrap-->
     <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style = "margin: 80px;">
        <div class = "row">
           <div class="col-md-6">
            <div class="card">
               <div class="card-header">
                <h2>Login</h2>
               </div>
               <div class="card-body">
                <form action="" method = "post">
                    <div class="form-group mt-3">
                        <label for="">Enter Your Email</label>
                        <input type="text" name="userName" id="userName" class = "form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Enter Your Password</label>
                        <input type="password" name="userPass" id="userPass" class = "form-control">
                    </div>
                    <div class="container-form-group mt-3">
                        <input type="submit" value="Sign in" name="btnlogin" class = "btn - btn-outline-warning btn-sm">
                    </div>
                     <p>Don't have an account? <a href="regis.php">Register Here</a></p>
                </form>
               </div>
            </div>
           </div>
        </div>
    </div>

</body>
</html>