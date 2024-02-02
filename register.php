<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row align-content-center justify-content-center">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-header bg-primary">
                        <h2 class="text-center text-white">Registration Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="registration_validation.php" method="post" id="register">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" placeholder="Enter your name" name="name" class="form-control" id="usn-box">
                            </div>
                            <div class="form-group">
                                <label>Email Id</label>
                                <input type="text" placeholder="Enter your email id" name="email_id" class="form-control" id="usn-box">
                            </div>
                            <div class="form-group mt-2">
                                <label>Password</label>
                                <input type="password" placeholder="Enter your password" name="password" class="form-control" id="pw-box">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" placeholder="Enter your address" name="address" class="form-control" id="usn-box">
                            </div>
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text" placeholder="Enter your phone number" name="phone_number" class="form-control" id="usn-box">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" value="Submit">
                            </div>
                            <div class="form-group">
                                Already have an account?
                                <a href="login.php">LogIn</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>