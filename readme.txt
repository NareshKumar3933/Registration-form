==== Installation ====


Step 1:
Clone the repository from the GitHub link - https://github.com/NareshKumar3933/Registration-form.git

Step 2:
After cloning the repository, open the "database" folder. Inside this folder, you will find two files: "customerdetails.csv" and "customerdetails.sql".
Choose one of these files to import into your MySQL server. Importing the file will create the necessary database and tables for the project.


Step 3:
Once you have imported the file into your MySQL server, navigate to the "dbConnection" folder in the cloned repository. 
Inside this folder, open the "connectionTo-DB.php" file.
In the "connectionTo-DB.php" file, locate the following lines of code:
$servername = "localhost";
$username = "root";
$password = "";
Replace the '$servername' value with the hostname where you want to run the project. 
Modify the '$username' and '$password' variables with your MySQL server's username and password, respectively.

Step 4:
Open a web browser and enter the URL in the following format: 'http://hostname/project-name/'.
For example, if you are running the project on your local machine, you can use 'localhost/registration-form/' as the URL.
After entering the URL, the project should start running, and you should be able to access the registration-form.