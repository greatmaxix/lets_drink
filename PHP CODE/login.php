<?php 

session_start();
session_unset();
session_destroy();
$username = "";
$password = "";
include("include/functions.php");
if ((isset($_POST["username"])) && (isset($_POST["password"]))){
    session_start();
    $username = clear_input($_POST["username"]);
    $password = clear_input($_POST["password"]);
    login();
    if (array_key_exists("success", $_SESSION)){
        if ($_SESSION['success']){
            redirect("index.html");
        }    
    }
}


$pageTitle = "Login";
$section = "login";
 
?>
<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title">letsdrink</h1>

		</div>

	</div>
		
<div id="content">

<div class="section page">
    <div class="wrapper">
        <h1>Welcome back to our community</h1>
        
        <form method="post" action="login.php">
            <table>
            <tr>
                <th><label for="username">Username</label></th>
                <td><input type="text" name="username" ></td>
                
            </tr>
            <tr>
                <th><label for="password">Password</label></th>
                <td><input type="password" name="password"></td>
            </tr>

            </table>
            <input type="submit" value="Log in" name = "submit"/>
            <p>
            <a href = "register.php"><button type ="button">Register</button></a>
            </p>
        </form>
    </div>
</div>

<?php include("include/footer.php"); ?>