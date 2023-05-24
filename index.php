<?php require 'registration.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login-regFrontend.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <title>Homepage</title>
</head>
<body>


    <div class="navBar">
            <h1>Available For Guidance</h1>
            <div class="admin_contact_button">
                <a class="link" href="adminLogin/loginFrontend.php">Admin</a>
                <a class="link" href="form/formFrontend.php">Contact Us</a>
            </div>

    </div>

    <div class="container">
        <div class="title">
            <h3>Admin Registration</h3>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form">
            <div class="input_field">
                <label>Email</label>
                <input type="email" name="emailReg" placeholder="Enter Your Email" class="input" value="<?php echo isset($_POST["emailReg"]) ? $_POST["emailReg"] : ''; ?>">
            </div>
            <div class = "span"><?php echo $emailErr; ?></div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" name="passwordReg" placeholder="Enter Your Password" class="input" value="<?php echo isset($_POST["passwordReg"]) ? $_POST["passwordReg"] : ''; ?>">
            </div>
            <div class="span"><?php echo $passwordErr; ?></div>

            <div class="input_field">
                <input type="submit" value="Register" name="register" class="form-btn">
            </div>


        </div>
        </form>
    </div>
</body>
</html>