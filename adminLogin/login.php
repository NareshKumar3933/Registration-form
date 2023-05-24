<?php
require '../dbConnection/connectionTo-DB.php';
session_start();


$emailErr=$passwordErr=$err="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email = $_POST['email'];
    if (empty($email)) {
        $emailErr = "Email is required";
       
             
    } else {
        $pattern = "/^\S+@\S+\.\S+$/";

    if (!preg_match ($pattern, $email) ){  
            $emailErr = "Email is not valid.";
                   
     } else{
            $query = "SELECT * FROM adminloginpage WHERE email='$email' ";
            $result = mysqli_query($conn, $query);

            if (mysqli_num_rows($result) != 0) {
                $password = $_POST['password'];
                if (empty($password)) {
                    $passwordErr = "Password is required";
                } else {
                    if(strlen($password)<8){
                        $passwordErr = "Password Incorrect";       
                    } else {
                        $query = "SELECT * FROM adminloginpage WHERE email='$email' ";
                        $data = mysqli_query($conn, $query);
                        $no_rows = mysqli_num_rows($data);
                        $result = mysqli_fetch_assoc($data);
                        
                        if($no_rows!=0){
                            if(password_verify($password, $result['password'])){
                                $_SESSION['email']=$email;
                                header("Location:/registration-form/formSubmitted/adminAccessFrontend.php");
                                exit();
                            }else{
                                $passwordErr = "Password Incorrect";
                        
                       }

                        }
                              }
                }

            } else {
                $emailErr = "Email is not registered";
    } 
         }
}

}


?>