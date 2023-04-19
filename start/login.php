<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>AYRO Login Page</title>
</head>
<body>
<form method="POST" action="login.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <input type="submit" name="submit" value="Submit">
</form>

<?php 
 $dns="mysql:host=localhost;dbname=Ayrotest;port=3306;charset=utf8mb4";
 $pdo;
 try{
     $pdo = new PDO($dns, 'admin', 'password', []);
     echo '<h2>Successful Connection</h2>';
 }
 catch(PDOException $e){
      echo '<h2>Failed to Connect</h2>';
      echo '<h3>Error Message: '.$e->getMessage().'</h3>';
      echo '<h3>Error Code: '.$e->getCode().'</h3>';
     throw new PDOException($e->getMessage(), $e->getCode());
 }

 if(isset($_POST['submit'])) {
    echo '<h3>You have clicked the "submit" button..' .$_POST['username'].'</h3>';
    
    //PHP COOKIE CUTTER CODE
    $sth = $pdo->prepare("SELECT * FROM users WHERE username='".$_POST['username']."'");
    $sth->execute();
    $result = $sth->fetch();
    //END PHP COOKIE CUTTER CODE

    if(empty($result)){
        echo '<h3>COULD NOT FIND USER</h3>';
    }else{
        $passHash = $result['password'];
        echo '<h3>PASSWORD: '.$passHash.'</h3>';
        if($_POST["password"] == $result['password']){
            echo '<h3>Login Successful! you will be redirected to the home page.</h3>';
        // Redirect to the home page if login is successful
        header("Location: http://147.182.180.7/info.php");
        exit();    
        }
        else{
            echo '<h3>Password Incorrect</h3>';
        }
    }
   
 }else{
    echo '<h3>You are visiting.</h3>';
 }

// connect to the database
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "Ayrotest";


// $dbconnect=mysqli_connect($hostname,$username,$password,$db);

//check if form is submitted
if(isset($_POST['submit'])) {
    
 // Get username and password from the form
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 // Hash the password
// $hashed_password = password_hash($password, FETCHED PASS FROM DB);
    
 // Prepare and execute the SQL statement to check if the user exists
 $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
 $stmt->bind_param("s", $username);
 $stmt->execute();
 
//  // Get the result of the query
 $result = $stmt->get_result();
 
//  // Check if the user exists
 if($result->num_rows == 1) {
     // Get the user's password from the result
     $row = $result->fetch_assoc();
     $stored_password = $row['password'];
     
//      // Verify the password
//      if(password_verify($password, $stored_password)) {
//          // Password is correct, start a new session and redirect to home page
//          session_start();
//          $_SESSION['username'] = $username;
//          header("Location: index.php");
//      } else {
//          // Password is incorrect, display an error message
//          echo "Incorrect password.";
//      }
//  } else {
//      // User doesn't exist, display an error message
//      echo "User not found.";
  }
}


?>



</body>
</html>
