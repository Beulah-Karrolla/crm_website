<?php
        // put your code here
        session_start();
        $servername = "localhost";
$username = "root";
$dbname = "msme";

// Create connection
$conn = new mysqli($servername, $username, null, $dbname);
$sql="select p1app from userdb where name='". $_SESSION['username']."'";
$res = mysqli_query($conn,"select p1app from userdb where name='". $_SESSION['username']."'") or die(mysqli_error());
echo $_SESSION['username'];
$row = mysqli_fetch_array($res);
echo $row['p1app'];
//$sql="select p1app from userdb where name like 'beu';";


if($row['p1app']==NULL)
{
    header('Location: quiz1.php');
}
 else
    
 {
    
echo "<script>
alert('YOU ALREADY TAKEN THE QUIZ TRY FOR ANOTHER POLICY!!!');
window.location.href='trade1.php';
</script>";
 }
 ?>

