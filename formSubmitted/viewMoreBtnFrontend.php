<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewMoreBtnFrontend.css">

    <title>View More</title>
</head>
<body>
    <div class="container">

        <div class="header">  
                 <a href="adminAccessFrontend.php"> <h2> Back to Dashboard </h2> </a> 
        </div>
            
        <h2>Full Details of Customer</h2>
        
        <div class="table">
            <table >
                <tr >
                    <th >Name</th>
                    <th >Phone No</th>
                    <th >Email</th>
                    <th >Zip Code</th>
                    <th >Description</th>
                    <th >Requested Time</th>
                </tr>
                <?php require 'viewMoreBtn.php' ?>
            </table>
        </div>
        
    </div>
</body>
</html>
