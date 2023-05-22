<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formFrontend.css">
    <title>Form</title>
</head>
<body>
<?php
 require 'formBackend.php';
?>

            <div class="header">  
                <a href="../index.php"> <h2> Back to Homepage </h2> </a>
            </div>

        <div class="container">
        
            

        <div class="title">
            <h3>CONTACT US FORM</h3>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form">
                <div class="input_field" >
                    <label>Full Name</label>
                    <input type="text" name="fullname" placeholder="e.g. John Daniel" value="<?php echo isset($_POST["fullname"]) ? $_POST["fullname"] : ''; ?>" class="input"><span><?php echo $nameErr; ?></span>
                </div>
                    
                <div class="input_field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="e.g. johndaniel@gmail.com" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" class="input" ><span><?php echo $emailErr;?></span>
                </div>
                <div class="input_field">
                    <label>Phone No</label>
                    <input type="number" name="phonenumber" placeholder="e.g. 03123456789" value="<?php echo isset($_POST["phonenumber"]) ? $_POST["phonenumber"] : ''; ?>" class="input"><span><?php echo $phoneNoErr; ?></span>
                </div>
                    <div class="input_field">
                    <label>Zip Code</label>
                <input type="text" name="zip_code" placeholder="e.g.75300" value="<?php echo isset($_POST["zip_code"]) ? $_POST["zip_code"] : ''; ?>" class="input" ><span><?php echo $zipCodeErr ?></span>
                </div>
                <div class="input_field">
                    <label>Description</label>
                    <textarea name="description" placeholder="Enter Your Query Here" value="<?php echo isset($_POST["description"]) ? $_POST["description"] : ''; ?>"></textarea><span><span><?php echo $descriptionErr;  ?></span>
                </div>
                <div class="input_field">
                <input type="submit" value="Submit" name="submit" class="form-btn">
                </div>
                <div class="input_field">
                <input type="reset" value="Reset" name="reset" class="form-btn">
                </div>
            </div>
        </form>
    </div>

</body>
</html>