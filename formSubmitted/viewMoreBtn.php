<?php
require '../dbConnection/connectionTo-DB.php';
session_start();
$login=$_SESSION['email'];
if($login==true){
$id = $_GET['id'];
$query = "SELECT * FROM contactuspage WHERE Id='$id' " ;
$data = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($data);
?>
<!-- for adding row after getting the data -->
                <tr>
                    <td><?php echo $result['fullname'] ?></td>
                    <td><?php echo $result['phoneNo'] ?></td>
                    <td><?php echo $result['email'] ?></td>
                    <td><?php echo $result['zipCode'] ?></td>
                    <td><?php echo $result['descriptionDetails'] ?></td>
                    <td><?php echo $result['requestedAt'] ?></td>
                </tr>
<?php
}
else{
    header("Location:/registration-form/adminLogin/loginFrontend.php");
}
?>