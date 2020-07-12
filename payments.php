<?php include_once('server.php');

$sql = "SELECT * FROM payment";
$resultset = mysqli_query($db, $sql);
// while( $res = mysqli_fetch_assoc($resultset) ) 
// {
    if (mysqli_num_rows($resultset) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($resultset)) {
        echo "<strong>"."Payment_ID :  " . "</strong>".
         $row["payment_id"].
         "<strong>"." - Amount :  " ."</strong>".
           $row["amount"].
           "<strong>"." - Date of Payment :  " ."</strong>".
             $row["date_of_payment"].
             "<strong>"." - Customer ID :  " ."</strong>".
              $row["cus_id"].
               "<br>"."<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<br>
<a href="display.php">CLICK HERE TO GO BACK </a></h2>