<?php
// require 'deleteEntry.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../css/adminAccessFrontend.css">
    <link rel="stylesheet" type="text/css" href="../css/header.css"/>


</head>
    <body>
                <nav>
                
                <label class="logo">Admin Dashboard</label>
                <ul>
                    <li><a href="../adminLogin/logout.php">Logout</a></li>
                </ul>
                </nav>
        <div class="container">
                
                <h2>Welcome Admin</h2>
                <div class="table">
                    <table >
                            <tr >
                            <!-- <th >Id</th> -->
                            <th >Name</th>
                            <th >Phone No</th>
                            <th >Email</th>
                            <th >Operations</th>
                            </tr>
                            <?php
                                require 'adminAccess.php';
                            ?>          
                    </table>
                </div>
            </div>
    </body>
</html>
<script>
    function deleteconfirmation(){
        return confirm('Are you sure to detele this entry?');
    }
</script>