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
<?php include_once('server.php') ?>
<div class="header">
	<h2>Home Page</h2>
</div>
	<form method="post" action="login.php">

		<?php include_once('errors.php'); ?>

		<div class="input-group1">
			<label>Login ID</label>
			<input type="text" name="login_id" >
        </div><br>
		<div class="input-group1">
			<label>Password</label>
			<input type="password" name="password">
		</div><br>
		<div class="input-group1">
			<button type="submit" class="btn1" name="login_user">Login</button>
		</div><br>
		<div class="input-group1">
			<button type="submit" class="btn1" name="Back"><a href="Main.html">Back to Main</a></button>
		</div><br>
		<p>

</body>
</html>