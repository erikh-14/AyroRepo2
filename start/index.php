

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="style.css">
		<title>Employee API</title>
		
		<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/b0a28fe022.js" crossorigin="anonymous"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="script.js"></script>
		<style>
		/* body {
			background-image: url('back.jpg');
			background-size: 40% auto;
			background-repeat:repeat;
			height: 100vh;

		} */
    /* Style the video: 100% width and height to cover the entire window */
    #myVideo {
  position: fixed;
  z-index: -1;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height:100%;
  left: 50%;
  transform: translateX(-50%);
}

/* Add some content at the bottom of the video/page */
.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
  font-family: 'Alumni Sans', sans-serif;
}

/* Style the button used to pause/play the video */
#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: 2px solid white;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}


	</style>
	</head>


	<body>
  
    <!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="ayro.mp4" type="video/mp4">
</video>
<!-- Optional: some overlay text to describe the video -->
<div class="content">
<img src="ayro-logo.png" alt="Ayro Logo" style="width:400px;height:100px;">

  <h1>Welcome!</h1> 
  
  <p>Date/Time: <span id="datetime"></span></p>
  
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>

  <script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" onclick="window.location.href = 'http://147.182.180.7/info.php';">Current Employees <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" onclick="window.location.href = 'http://147.182.180.7/login.php';">Log In <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Driver</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Engineer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Dealership</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">User</a>
      </li>
      
      
    </ul>
  
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> 

<form class = "db-form" method="POST" action="index.php">

<h3>New Employee Form</h3>
  <!-- First Name input -->
  <div class="mb-3">
    <label for="first-name" class="form-label">First Name</label>
    <input type="text" id="first-name" class="form-control" name="first-name" placeholder="Enter Your First Name">
  </div>
  </div>

  <!-- Last Name input -->
  <div class="mb-3">
    <label for="last-name" class="form-label">Last Name</label>
    <input type="text" id="last-name" class="form-control" name="last-name" placeholder="Enter Your Last Name">
  </div>

  <!-- ID input -->
  <div class="mb-3">
    <label for="id" class="form-label">ID</label>
    <input type="text" id="id" class="form-control" name="id" />
  </div>

  <!-- City input -->
  <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <input type="text" id="city" class="form-control" name = "city"/>
  </div>

  <!-- Submit button -->
  <button type="submit" value="Submit" name="submit" class="btn btn-primary">Submit</button>
</form>




<?php
    $dns="mysql:host=localhost;dbname=ayrotest;port=3306;charset=utf8mb4";
    $pdo;
    try{
        $pdo = new PDO($dns, 'admin', 'password', []);
        
    }
    catch(PDOException $e){
        throw new PDOException($e->getMessage(), $e->getCode());
    }


    $hostname = "localhost";
    $username = "admin";
    $password = "password";
    $db = "ayrotest";
    $dbconnect=mysqli_connect($hostname,$username,$password,$db);
    if ($dbconnect->connect_error) {
        echo "Database connection failed: " . $dbconnect->connect_error;
      }

    if (isset($_POST['submit'])) {


    $first=$_POST['first-name'];
    $last=$_POST['last-name'];
    $ID=$_POST['id'];
    $city=$_POST['city'];

    $query = "INSERT INTO Employees (FirstName, LastName, ID, City)
    VALUES ('$first', '$last', '$ID', '$city')";

if (!mysqli_query($dbconnect, $query)) {
    echo "<p style='color:red; text-align:center;'>THERE HAS BEEN AN ERROR</p>";

} else {
  echo '<div class="alert success">
  <h4>Employee Submitted Successfully!</h4>
  <a class="close" onclick="">&times;</a>
</div>';
}

      // Create a prepared statement to insert the form data into the table
    //   $stmt = $mysqli->prepare("INSERT INTO 'employees' (first_name, last_name, id) VALUES (?, ?, ?)");
    //   $stmt->bind_param("ssi", $first_name, $last_name, $id);
  
      // Execute the prepared statement and check for errors
      if ($stmt->execute()) {
          echo 'Data inserted successfully';
      } else {
          echo 'Error inserting data: ' . $stmt->error;
      }
  
      // Close the prepared statement
      $stmt->close();
  }
  
  
  // Close the database connection
  // $mysqli->close();
?>

 

	</body>
  <script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
</script>
	<footer id="copyright">
          <p>Copyright &copy; 2023 | Erik Hernandez</p>
  </footer>
</html>
