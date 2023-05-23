<?php
require './dbConnection/connectionTo-DB.php';
$emailErr=$passwordErr = $hashPassword = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST['emailReg'];
    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        $pattern = "/^\S+@\S+\.\S+$/";

        if (!preg_match ($pattern, $email) ){  
            $emailErr = "Email is not valid.";        
        } else {
            $query = "SELECT * FROM adminloginpage WHERE email='$email' ";
            $result = mysqli_query($conn, $query);
        
            if(mysqli_num_rows($result) > 0){
                $emailErr = "Email already exists";
            } else {
                $password = $_POST['passwordReg'];
                if (empty($password)) {
                    $passwordErr = "Password is required";
                } else{
                    if(strlen($password)<8){
                    $passwordErr = "Password contain atleast 8 characters";
                    } else{
                            $hashPassword = password_hash($password, PASSWORD_BCRYPT);
                        
                            $query = "INSERT INTO adminloginpage( email, password ) VALUES('$email','$hashPassword' )";
                              if ($conn->query($query) === TRUE) {
                                echo "<script>
                                alert('Registered Successfully');
                               </script>";
                              header("Location:/registration-form/adminLogin/loginFrontend.php");
                              exit();
                             }    
                         
                         }
            
                     }

        }
    }
    
 }

}
?>

