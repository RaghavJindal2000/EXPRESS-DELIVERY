<html>
	<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eXpress Delivery</title>
    <link id="favicon" rel="icon" href="LOGO.png">
    <script src="https://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato&amp;display=swap' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins:800,800i&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="./Styles/style.css">
    <link rel="stylesheet" href="./Styles/style2.css">
    <link rel="stylesheet" href="./Styles/style3.css">
    <link rel="stylesheet" href="./Styles/style4.css">
    <link rel="stylesheet" href="./Styles/style5.css">
    <link rel="stylesheet" href="./Styles/style6.css">
    <link rel="stylesheet" href="./Styles/style7.css">
    <link rel="stylesheet" href="./Styles/style8.css">
    <link rel="stylesheet" href="./Styles/style9.css">
	<link rel="stylesheet" href="./Styles/style10.css">
	<link rel="stylesheet" href="./Styles/style11.css">
	<link rel="stylesheet" href="./Styles/style12.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i&display=swap" rel="stylesheet">
    
    <style id='fontFamilyStyle'>
    
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Lato', sans-serif;
    }
    p, span, label, a, button, strong, div, em {
        font-family: 'Montserrat', sans-serif;
    }
	</style>
	</head>

<body>

<?php 
	session_start(); 

	if (!isset($_SESSION['login_id'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['login_id']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div class="header1">
		<h2>HELLO</h2>
	</div>
	<div class="content1">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['login_id'])) : ?>
	
			<p>Welcome <strong><?php echo $_SESSION['login_id']; ?></strong></p><br><br>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p><br><br>
            <p> <a href="Display.php">DISPLAY INFORMATION</a> </p>
		<?php endif ?>
	</div>