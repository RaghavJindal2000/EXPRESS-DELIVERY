
<?php include_once('server.php');

//TRACK CONSIGNMENT
if (isset($_POST['track'])) {
 $courier_id = mysqli_real_escape_string($db, $_POST['courier_id']);

//$courier_id = isset($_GET['courier_id']) ? $_GET['courier_id'] : '';
  
   if (empty($courier_id)) {
   	array_push($errors, "courier Id is required");
   }

//   if (count($errors) == 0) {
  	$query = "SELECT * FROM Courier WHERE courier_id='$courier_id'";
      $results = mysqli_query($db, $query);
      while( $record = mysqli_fetch_assoc($results) )
      {
//    	if (mysqli_num_rows($results) == 1) {
//    	  $_SESSION['success'] = "You are now tracking $courier_id";
//    	  header('location: tracker.php');
//    	}else {
//    		array_push($errors, "Courier ID does not exist");
//    	}
//    }
//  }
?>

<table>
<tr bgcolor='#f1f1f1'><td><b>Courier ID</b></td><td><?php echo $record['courier_id']; ?>
<tr bgcolor='#f1f1f1'><td><b>Docket</b></td><td><?php echo $record['docket'];?></td></tr>
<tr><td><b>Courier Name</b></td><td><?php echo $record['courier_name'];?></td></tr>
<tr bgcolor='#f1f1f1'><td><b>Customer ID</b></td><td><?php echo $record['cus_id'];?></td></tr>
<tr><td><b>Ship ID</b></td><td><?php echo $record['ship_id'];?></td></tr>
<tr bgcolor='#f1f1f1'><td><b>Employee ID</b></td>
<td><?php echo $record['emp_id'];?></td></tr>
</table>

<br>
<br>
<a href="http://localhost/DBMS_Project/main.html"> GO BACK </a>
<?php }} ?>