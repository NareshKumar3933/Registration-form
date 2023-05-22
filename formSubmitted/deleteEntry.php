<?php

require '../dbConnection/connectionTo-DB.php';

$id = $_GET['id'];
$query = "DELETE FROM contactuspage WHERE Id='$id' ";
$data = mysqli_query($conn,$query);
if($data)
{
    // echo "Record Deleted";
    //redirect to admin access frontend page
    header("Location: adminAccessFrontend.php");
    exit();    
}
else
    {
         echo "Failed to Delete";
    }

?>

