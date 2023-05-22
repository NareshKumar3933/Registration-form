<?php
require '../dbConnection/connectionTo-DB.php';
session_start();

$login=$_SESSION['email'];
if($login==true){
    $query = "SELECT * FROM contactuspage";
$data = mysqli_query($conn,$query);
$no_rows = mysqli_num_rows($data);
if($no_rows!=0){
    while($result = mysqli_fetch_assoc($data)){  
?>                            
                            <tr>
                            <!-- <td><?php //echo $result['Id'] ?></td> -->
                            <td><?php echo $result['fullname'] ?></td>
                            <td><?php echo $result['phoneNo'] ?></td>
                            <td><?php echo $result['email'] ?></td>
                            <td><?php echo"<a href='viewMoreBtnFrontend.php?id=$result[Id]'><input type='submit' value='View More' class='update'></a>
                                           <a href='deleteEntry.php?id=$result[Id]'><input type='submit' value='Delete' class='delete' onclick='return deleteconfirmation()'></a>"?></td>
                            </tr>
                            
                            
 <?php          
    }
}
else{
    echo "Record not found";
}
}
else{
    header("Location:/registration-form/adminLogin/loginFrontend.php");
}


?>
