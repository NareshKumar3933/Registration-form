<?php
require 'registration.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/login-regFrontend.css">
    <title>Admin Registration</title>
</head>
<body>
            <div class="header">  
                <a href="../index.php"> <h2> Back to Homepage </h2> </a>
            </div>

    <div class="container">
        <div class="title">
            <h3>Registration</h3>
        </div>
        <form action="" method="post">
        <div class="form">
            <div class="input_field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="input" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
            </div>
            <div class = "span"><?php echo $emailErr; ?></div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" name="passwordReg" placeholder="Enter Your Password" class="input" value="<?php echo isset($_POST["passwordReg"]) ? $_POST["passwordReg"] : ''; ?>">
            </div>
            <div class = "span"><?php echo $passwordErr; ?></div>
                
            <div class="input_field">
                <input type="submit" value="Register" name="register" class="form-btn">
            </div>
            
            
        </div>
        </form>
    </div>
</body>
</html>