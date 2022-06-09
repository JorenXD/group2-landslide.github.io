<?php
// Initialize the session
session_start();
include_once('config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <title>Sensor Data</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="sensor-data.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>Group 2</span></h2>
        </div>

        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="dashboard.php"><span class="las la-users"></span>
                        <span>Home</span></a>
                </li>
                <li>
                    <a href="sensor-data.php" class="active"><span class="las la-clipboard-list"></span>
                        <span>Sensor Data</span></a>
                </li>
                <li>
                    <a href="about.php"><span class="las la-user-circle"></span>
                        <span>About</span></a>
                </li>
            </ul>
        </div>
    </div>

       
    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>Landslide Detection: An Early Alert Using Fuzzy Logic Algorithm
            </h2>
            
            <div class="user-wrapper">
                <small><a href="logout.php">Logout</a></small>
            </div>
        </header>

        <main>
            <div>
                <h3>Pangasinan, Mount San Isidro </h3>
                <h4>Latest Landslide Hazard Rating: <span class="rate">2.00 (VERY LOW CHANCE OF LANDSLIDE)</span></p></h4>
                <br>
                <button onclick="myFunction()" class="tbl-button">View Table</button> 
            </div>
            
                <table class="content-table" id="toggle" style="display: none;">
                    <thead>
                    <tr>
                        <th>Date & Time</th>
                        <th>Soil Moisture</th>
                        <th>Raindrop</th>
                        <th>Vibration</th>
                        <th>Hazard Rating</th>
                    </tr>
                    <thead>
                    <tbody>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "admins");
                        if($conn-> connect_error){
                            die("Connection Failed:". $conn-> connect_error);
                        }

                        $sql = "SELECT `COL 1`, `COL 2`, `COL 3`, `COL 4`, `COL 5` FROM `sensordata`";
                        $result = $conn->query($sql);

                        if($result->num_rows > 0){
                            while ($row = $result -> fetch_assoc()){
                               echo "<tr><td>". $row["COL 5"] . "</td><td>" . $row["COL 1"] . "</td><td>" . $row["COL 3"]. "</td><td>" . $row["COL 2"] . "</td><td>" . $row["COL 4"] . "</td></tr>";
                            }
                        echo "</table>";    
                        }
                        else{
                            echo "0 Result";
                        }

                        $conn-> close();

                    ?>

                    </tbody>
                </table>
            </div>

        </main>

    </div>

    

<script>
function myFunction() {
  var x = document.getElementById("toggle");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>


</body>

</html>