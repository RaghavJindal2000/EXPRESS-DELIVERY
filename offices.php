<?php include_once('server.php');

$sql = "SELECT * FROM office";
$resultset = mysqli_query($db, $sql);
// while( $res = mysqli_fetch_assoc($resultset) ) 
// {
    if (mysqli_num_rows($resultset) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($resultset)) {
        echo "<strong>"."Office_ID :  " . "</strong>".
         $row["office_id"].
         "<strong>"." - Phone Number :  " ."</strong>".
           $row["office_phone"].
           "<strong>"." - Office_name :  " ."</strong>".
             $row["office_name"].
             "<strong>"." - Address :  " ."</strong>".
              $row["office_address"].
               "<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<br>
<a href="display.php">CLICK HERE TO GO BACK </a></h2>