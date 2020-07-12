<?php include_once('server.php');

$sql = "SELECT * FROM comment_ship";
$resultset = mysqli_query($db, $sql);
// while( $res = mysqli_fetch_assoc($resultset) ) 
// {
    if (mysqli_num_rows($resultset) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($resultset)) {
        echo "<strong>"."Comment_ID :  " . "</strong>".
         $row["comment_id"].
         "<strong>"." - Title :  " ."</strong>".
           $row["title"].
           "<strong>"." - Rating Given :  " ."</strong>".
             $row["rating"].
             "<strong>"." - Comment Given :  " ."</strong>".
              $row["comment_ship"].
              "<strong>"." - Ship Id :  " ."</strong>".
              $row["ship_id"].
               "<br>"."<br>";
    }
} else {
    echo "0 results";
}
?>
<br>
<br>
<a href="display.php">CLICK HERE TO GO BACK </a></h2>