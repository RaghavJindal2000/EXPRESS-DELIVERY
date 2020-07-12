<?php include_once('server.php');

if (isset($_POST['add_com'])) {
    // receive all input values from the form
    $comment_id = $_POST['comment_id'];
    $title = mysqli_real_escape_string($db, $_POST['title']); //can easily accomodate space and special characters
    $rating = $_POST['rating'];
    $comment_ship = mysqli_real_escape_string($db, $_POST['comment_ship']);
    $ship_id = $_POST['ship_id'];
    // form validation: ensure that the form is correctly filled
    if (empty($title)) { array_push($errors, "Title is required"); }
    if (empty($rating)) { array_push($errors, "Rating is required"); }
    if (empty($comment_ship)) { array_push($errors, "Comment is required"); }
    
    $query = "INSERT INTO comment_ship (comment_id,title,rating,comment_ship,ship_id) VALUES('$comment_id','$title','$rating','$comment_ship','$ship_id')";
   			
        mysqli_query($db, $query);
	 
			$_SESSION['comment_id'] = $comment_id;
}?>

<html>
<head>
<title>Comment Added Successfully</title>
</head>
<body>
    <center><h1>Your Comment has been Registered with us Successfully</h1>
    <a href="http://localhost/PHP_Project/main.html"> GO BACK </a></center>
</body>
</html>