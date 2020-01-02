<?php 

include("include/functions.php");

$pageTitle = "Register";
$section = "register";
$username = "";
$password = "";
$email = "";
$password_conf = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $username = clear_input($_POST["username"]);
    $password = clear_input($_POST["password"]);
    $email = clear_input($_POST["email"]);
    $password_conf = clear_input($_POST["password_conf"]);
    register();

    if (array_key_exists("success", $_SESSION)){
        if ($_SESSION['success']){
            redirect("login.php");
        }    
    }
}
 
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
        <h1>Be a part of our community</h1>
        
        <form method="post" action="register.php">
            <table>
            <tr>
                <th><label for="username">Username</label></th>
                <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
            </tr>
            <tr>
                <th><label for="email">Email</label></th>
                <td><input type="text" name="email" value="<?php echo $email; ?>"></td>
            </tr>
            <tr>
                <th><label for="password">Password</label></th>
                <td><input type="password" name="password" value="<?php echo $password; ?>"></td>
            </tr>
           
            <tr>
                <th><label for="password">Confirm your assword</label></th>
                <td><input type="password" name="password_conf" value="<?php echo $password; ?>"></td>
            </tr>

            </table>
            <input type="submit" value="Register" name = "submit"/>
        </form>
    </div>
</div>

<?php include("include/footer.php"); ?>