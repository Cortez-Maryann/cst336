
<?php 
session_start();

include 'dbConnection.php';
$dbConn = startConnection("c9");

//get userna,e and password
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM p10_users
        WHERE username = '$username'
        AND password = '$password'";
        
$stmt = $dbConn ->prepare($sql);
$stmt->execute();
$record = $stmt->fetch(PDO::FETCH_ASSOC);//we're expecting just one password.

if(empty($record)){
    echo "Wrong username or password!";
}else{
   header('Location: quiz.html'); //redirects to another program
}
//print_r($record);
?>