<?php

// Inialize session
session_start();

// Include database connection settings
$host = 'localhost';        // Your MySQL hostname. Usualy named as 'localhost',                  so you're NOT necessary to change this even this script has already     online on the internet.
$db  = 'msme'; // Your database name.
$user= 'root';             // Your database username.
$pwd = '';                 // Your database password. If your database has no         password, leave it empty.

// Let's connect to host
$conn = mysqli_connect($host,$user,$pwd,$db);



// Retrieve username and password from database according to user's input

$login = mysqli_query($conn,"SELECT count(*) FROM userdb WHERE (name = '" .       mysqli_real_escape_string($_POST['your_name']) . "') and (password = '" .     mysqli_real_escape_string(md5($_POST['your_pass'])) . "')");

// Check username and password match

 if (mysqli_num_rows($login) >= 1) {
// Set username session variable
$_SESSION['username'] = $_POST['your_name'];

// Jump to secured page
 header('Location: indexmod.php');
}
else {
// Jump to login page
    echo "failed";
header('Location:index1.html');
}

?>