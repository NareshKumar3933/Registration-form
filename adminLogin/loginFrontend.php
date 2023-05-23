<?php require 'login.php';
       
       //if (isset($_POST['login'])) {
        
    //}       
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login-regFrontend.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css"/>

    <title>Admin login</title>
</head>
<body>
        <div class="header">  
                <a href="../index.php"> <h2> Back to Homepage </h2> </a>
        </div>
        <div class="container">
                
        <div class="title">
            <h3>Admin Login</h3>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <div class="form">
            <div class="input_field">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" class="input" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
                <div class = "span"><?php echo $emailErr; //if(isset($_SESSION['emailErr'])){echo $_SESSION['emailErr']; session_unset(); } ?></div>
        

            </div>

            <div class="input_field">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="input" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>"><div class="span"><?php echo $passwordErr; ?></div>
            </div>
                
            <div class="input_field">
                <input type="submit" value="Login" name="login" class="form-btn">
            </div>
            
        </div>
        </form>
    </div>
</body>
</html>