<?php 
	session_start();

    // variable declaration  
	$login_id="";
	$email = "";  //same email for employee as well as login
    $office_id="";
    $office_phone = "";
	$office_name = "";
    $office_address = "";
    $emp_id="";
    $fname = "";
    $lname = "";
    $profilepic = "";
    $emp_mobile1 = "";
    $emp_mobile2 = "";
    $cus_id="";
    $customer_name="";
    $customer_email="";
    $cus_mobile1="";
    $cus_mobile2="";
    $payment_id = "";
    $amount="";
    $date_of_payment="";
    $ship_id="";
    $weight="";
    $date_of_shipment="";
    $to_city="";
    $from_city="";
    $comment_id="";
    $title="";
    $rating="";
    $date_of_comment="";
    $comment_ship="";
    $courier_id="";
    $docket="";
    $courier_name="";
    

	
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'DBMS');
	
	
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


	// LOGIN USER
	if (isset($_POST['login_user'])) {
        $login_id = mysqli_real_escape_string($db, $_POST['login_id']); //can easily accomodate space and special characters
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($login_id)) {
			array_push($errors, "Login ID is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = ($password);
			$query = "SELECT * FROM Login WHERE login_id='$login_id' AND password='$password'";
			$results = mysqli_query($db, $query);
			$sqll=mysqli_fetch_array($results);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['login_id'] = $login_id;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php'); //redirection to index.php
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>