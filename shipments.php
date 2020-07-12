<?php include_once('server.php');

$sql = "SELECT * FROM shipment";
$resultset = mysqli_query($db, $sql);
// while( $res = mysqli_fetch_assoc($resultset) ) 
// {
    if (mysqli_num_rows($resultset) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($resultset)) {
        echo "<strong>"."Ship_ID :  " . "</strong>".
         $row["ship_id"].
         "<strong>"." - Weight :  " ."</strong>".
           $row["weight"].
           "<strong>"." - Date_Of_Shipment :  " ."</strong>".
             $row["date_of_shipment"].
             "<strong>"." - From City :  " ."</strong>".
              $row["from_city"].
              "<strong>"." - To City :  " ."</strong>".
              $row["to_city"].
              "<strong>"." - Employee ID Associated with this Shipment :  " ."</strong>".
              $row["emp_id"].
              "<br>"."<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<br>
<a href="display.php">CLICK HERE TO GO BACK </a></h2>