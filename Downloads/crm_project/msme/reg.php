<?php
        // put your code here
        $name=$_POST['your_name'];
        $email=$_POST['email'];
        $password=$_POST['your_pass'];
        $servername = "localhost";
$username = "root";
$dbname = "msme";
echo  "ngytut";
// Create connection
$conn = new mysqli($servername, $username, null, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO seller (name,password)
VALUES ('$name','$password')";

if ($conn->query($sql) === TRUE) {
  
    session_start();
    $_SESSION['useremail'] = $email;
    $_SESSION['username'] = $name;
     header("Location: indexmod.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

        ?>
<html>
 <p>hgjhgjh</p>
</html>
