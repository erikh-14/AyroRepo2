<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans&display=swap" rel="stylesheet">
</head>
<body>
    
    <video autoplay muted loop id="myVideo">
  <source src="vanish.mp4" type="video/mp4">
</video>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  
 
  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon sr-only"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item">
        <a class="nav-link" onclick="window.location.href = 'http://147.182.180.7';">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Shipper </a>
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
</nav> <br>
<h1>Current Employees</h1><br>

<!-- CSS STYLING -->
    <style>
        h1 {
        font-size: 55px;
        text-align: center;
        color: rgb(17, 28, 78);
        font-family: 'Alumni Sans', sans-serif;
        }
        h2 {
  text-align: center;
  color: rgb(17, 28, 78);
  font-family: 'Alumni Sans', sans-serif;
}
td {
        height: 50px;
        width: 160px;
        text-align: center;
        vertical-align: middle;
        font-family: 'Alumni Sans', sans-serif;
        font-size: 30px;
      }
      thead {
        height: 80px;
        width: 160px;
        text-align: center;
        vertical-align: middle;
        border: 2px black;
        font-family: 'Alumni Sans', sans-serif;
        font-size: 35px;
      }
      #myVideo {
  position: fixed;
  z-index: -1;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  left: 50%;
  transform: translateX(-50%);
}

.custom-table {
    border: 1px solid black;
    border-style: inset;
    z-index: 1;
    opacity: 0.8;
  }

.table_table-hover_table-dark {
    margin-left: auto;
    margin-right: auto;
    
}
#footer {
position: fixed;
margin-bottom: 200px;
height: 50; width: 100%;
text-align: center;
font-size: 0.8em;
bottom: 0;
}

#copyright {
position: absolute;
width: 100%;
text-align: center;
font-size: 20px;
bottom: 0;
font-family: 'Alumni Sans', sans-serif;
}
nav{
height: 70px;
position: sticky;
padding: 10px;
margin:0;
font-family: 'Alumni Sans', sans-serif;
font-size: 30px;
}
.search-bar {
border: none;
outline: none;
font-family: 'Alumni Sans', sans-serif;
font-size: 30px;
}
.navbar-brand_nav-item {
font-size: 35px;
font-family: 'Alumni Sans', sans-serif;
}
        
    </style>
<div class="container">
 <div class="row">
 <div class="col-sm-8 mx-auto">
    <?php echo $deleteMsg??''; ?>

    <div class="custom-table">
      <table class="table table-hover table-dark table-bordered custom-table">
       <thead class="table_table-hover_table-dark"><tr>
         <th scope="col">First Name</th>
         <th scope="col">Last Name</th>
         <th scope="col">ID Number</th>
         <th scope="col">City</th>
         </tr>
    </thead>
    <tbody>
    <?php
            $hostname = "localhost";
            $username = "admin";
            $password = "password";
            $databaseName = "ayrotest";
            $conn = mysqli_connect($hostname,$username,$password,$databaseName);

            if ($conn->connect_error) {
                die("Connection Failed: " .$conn->connect_error);
            }

            $db = $conn;
            $tableName="Employees";
            $columns=['ID', 'FirstName', 'LastName', 'City'];
            $fetchData = fetch_data($db, $tableName, $columns);


            function fetch_data($db, $tableName, $columns) {
                if(empty($db)) {
                    $msg= "Database Connection Error";
                    //echo 'DEBUG: '.$msg;
                }
                elseif (empty($columns) || !is_array($columns)) {
                    $msg= "Columns must be defined in an indexed array";
                    //echo 'DEBUG: '.$msg;
                }
                elseif (empty($tableName)) {
                    $msg= "Employees is empty";
                    //echo 'DEBUG: '.$msg;
                }
                else {
                    //echo 'DEBUG: Execute DB parsing.';
                    $columnName = implode(",", $columns);
                    $query = "SELECT ".$columnName." FROM ".$tableName." ORDER BY FirstName ASC";
                    //echo "DEBUG: SQL: \n".$query;
                    $result = $db->query($query);

                    if($result == true) {
                        if ($result->num_rows > 0) {
                            $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
                                $msg= $row;
                        }
                        else {
                            $msg= mysqli_error($db);
                            //echo 'DEBUG: '.$msg;
                        }
                    }
                    return $msg;
                }
            }
        ?>      
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $data['FirstName']??''; ?></td>
      <td><?php echo $data['LastName']??''; ?></td>
      <td><?php echo $data['ID']??''; ?></td>
      <td><?php echo $data['City']??''; ?></td>
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
<footer id="copyright">
          <p>Copyright &copy; 2023 | Erik Hernandez</p>
  </footer>
</html>

