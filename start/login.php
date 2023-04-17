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

  <input type="submit" value="Log In">
</form>

<?php
// Start the session
session_start();

// Get the username and password from the form
$username = $_POST['username'];
$password = $_POST['password'];

// Validate the username and password
if ($username == 'myusername' && $password == 'mypassword') {
  // Set a session variable to indicate that the user is logged in
  $_SESSION['loggedin'] = true;

  // Redirect the user to the home page
  header('Location: home.php');
  exit;
} else {
  // Show an error message
  echo 'Invalid username or password.';
}
?>

<?php
// Start the session
session_start();

// Check if the form was submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the username and password from the form
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the form values are not empty
  if (!empty($username) && !empty($password)) {
    // Connect to the database
    $conn = new mysqli('localhost', 'myusername', 'mypassword', 'mydatabase');

    // Prepare a SQL statement to retrieve the user's hashed password
    $stmt = $conn->prepare('SELECT password FROM users WHERE username = ?');
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists and the password matches
    if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      if (password_verify($password, $row['password'])) {
        // Set a session variable to indicate that the user is logged in
        $_SESSION['loggedin'] = true;

        // Redirect the user to the home page
        header('Location: home.php');
        exit;
      }
    }

    // Show an error message
    echo 'Invalid username or password.';
  }
}
?>

</body>
</html>