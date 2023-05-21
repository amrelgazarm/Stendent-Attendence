
<html>
<body>

<h1>great <?php echo 'ok';?>
</h1>


<?php $host = 'attendanceserver.mysql.database.azure.com';
$username = 'Adam';
$password = 'Student@54321t';
$db_name = 'attandance';



$con = mysqli_init();
mysqli_ssl_set($con,NULL, NULL, "C:\Demo\DigiCertGlobalRootCA.crt.pem", NULL, NULL);
mysqli_real_connect($con, "attendanceserver.mysql.database.azure.com", "Adam", "Student@54321", "attandance", 3306, MYSQLI_CLIENT_SSL);
 return $con; 

//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "C:\Demo\DigiCertGlobalRootCA.crt.pem", NULL, NULL);

// Establish the connection
//mysqli_real_connect($conn, 'mydemoserver.mysql.database.azure.com', 'myadmin@mydemoserver', 'yourpassword', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL);
 $con = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_DB);
  return $con;   
 //If connection failed, show the error
if (mysqli_connect_errno())
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}else 'no ';



/* // sql to create table
if(mysql_query($con,'CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);'));

if ($con->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $con->error;
}
 */


 


?>

 
<h1><?php 
if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>first_name</th>";
                echo "<th>last_name</th>";
                echo "<th>email</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['first_name'] . "</td>";
                echo "<td>" . $row['last_name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
	
?></h1>


 
</body></html>