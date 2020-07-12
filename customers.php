<?php include_once('server.php');

$sql = "SELECT * FROM customer";
$resultset = mysqli_query($db, $sql);
$sql2 = "SELECT * FROM cus_mobile";
$resultset2 = mysqli_query($db, $sql2);

//while( $res = mysqli_fetch_assoc($resultset) ) 

    if (mysqli_num_rows($resultset) > 0 and mysqli_num_rows($resultset2) > 0)  {
        // output data of each row
        while($row = mysqli_fetch_assoc($resultset) and $row2 = mysqli_fetch_assoc($resultset2)) {
        echo "<strong>"."Customer_ID :  " . "</strong>".
         $row["cus_id"].
         "<strong>"." - Customer Name :  " ."</strong>".
           $row["customer_name"].
           "<strong>"." - Customer Email :  " ."</strong>".
             $row["customer_email"].
             "<strong>"." - Customer Mobile :  " ."</strong>".
             $row2["cus_mobile1"].
             "<strong>"." - Customer Alternate Mobile :  " ."</strong>".
             $row2["cus_mobile2"].
             "<strong>"." - Employee ID Associated :  " ."</strong>".
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