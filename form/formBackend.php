<?php
require 'connectionTo-DB.php';
//for email sending
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Validation 
$nameErr = $emailErr =$phoneNoErr=$zipCodeErr=$descriptionErr="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    
    $fullName = $_POST['fullname'];
    if (empty($fullName)) {
        $nameErr = "Name is required";
    } else {
        $pattern = "/^[a-zA-Z]+(?: [a-zA-Z]+)*$/";

        if (!preg_match ($pattern, $fullName) ){
            $nameErr = "Invalid format<br>or Digits not allowed";
        }
    }
    
    $email = $_POST['email'];
    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        $pattern = "/^\S+@\S+\.\S+$/";

        if (!preg_match ($pattern, $email) ){  
            $emailErr = "Email is not valid.";        
        }     
    }
    $phoneNo = $_POST['phonenumber'];
    if (empty($phoneNo)){
        $phoneNoErr = "Phone Number is required";
    }else{
        $pattern = "/^0[1-9][0-9]{9}$/";
        if(!preg_match($pattern,$phoneNo)){
            $phoneNoErr = "Only numeric value is allowed.";
        }
        if (strlen ($phoneNo) != 11) {  
            $phoneNoErr = "Phone no must contain 11 digits.";  
            }  
    }
    
    
    $zipCode = $_POST['zip_code'];
    if (empty($zipCode)){
        $zipCodeErr = "Zip Code is required";
    }else{
        $pattern = "/^[0-9]{5}$/";
        if(!preg_match($pattern,$zipCode)){
            $zipCodeErr = "Only numeric value is allowed.";
        }
        if (strlen ($zipCode) != 5) {  
            $zipCodeErr = "Zip Code must contain 5 digits.";  
            }  
    }

    $description = $_POST['description'];
    if(empty($description)){
        $descriptionErr = "Description is required";
    }

    // if no validation errors
    if ($nameErr == "" && $emailErr == "" && $phoneNoErr == "" && $zipCodeErr == "" && $descriptionErr == "") {
        // Check if form has been submitted
        if(isset($_POST['submit'])){
            
            $sql = "INSERT INTO contactuspage (fullname, email, phoneNo, zipCode, descriptionDetails) VALUES ('$fullName', '$email', '$phoneNo', '$zipCode', '$description')";
            if ($conn->query($sql) === TRUE) {
             
                $mail = new PHPMailer(true);
                $mail ->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'nareshkumar3933@gmail.com';
                $mail->Password = 'sebghkpycuhgtofx';
                $mail->SMTPsecure = 'ssl';
                $mail->Port=25;
                $mail->setFrom('abc@gmail.com');
                $mail->addAddress($email);
                $mail->isHtml(true);
                $mail->Subject = "Request Received";
                $mail->Body = "Email Sent Successfully!";
                $mail->send();
                
               
                header("Location: emailSuccessMsg.php");
                exit();
    }

    }
    }

  
}
?>