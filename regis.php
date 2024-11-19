<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Entry++</title>
    <!--Link bootstrap-->
    <link rel = "stylesheet" href = "css/bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style = "margin: 80px;">
    <div class = "row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                   <h2>Registration Section<h2>
                </div>
                <div class="card-body">
                    <form action="lib/route/user/registration.php" method = "post">
                    <div class="form-group mt-3">
                        <label for="">Enter Your Name</label>
                        <input type="text" name="userName" id="userName" class = "form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Enter Your Email</label>
                        <input type="email" name="userEmail" id="userEmail" class = "form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Enter Your Password</label>
                        <input type="password" name="userPass" id="userPass" class = "form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Enter Your Mobile Number</label>
                        <input type="text" name="userPhone" id="userPhone" class = "form-control">
                    </div>
                    <div class="form-group mt-3">
                        <label for="">Enter Your NIC Number</label>
                        <input type="text" name="userNic" id="userNic" class = "form-control">
                    </div>
                    <div class="container-form-group mt-3">
                        <input type="submit" name = "btnSave" id="btnSave" value = "Register" class = "btn - btn-outline-warning btn-sm">
                        <input type="reset" value = "Clear" class = "btn - btn-outline-warning btn-sm">
                    </div>
                    <br>
                    <p>Already have an account? <a href="index.php">Log in</a></p>
                    </form>
                </div>
            </div>
           </div>
        </div>
    </div>
</body>
</html>