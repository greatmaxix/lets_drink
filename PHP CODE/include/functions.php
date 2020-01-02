<?php
function check_password($username, $password){
  include("connection.php");
  try {
    $password = md5($password);
    $query = $db->prepare("SELECT * FROM Users where username = ? and password = ?");
    $query->bindParam(1,$username,PDO::PARAM_STR);
    $query->bindParam(2,$password,PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);
  } catch (PDOException $e) {
    echo "Failed to check the data: ".$e->getMessage();
  }
  if ($result == null){
    return false;
  } else {
    return true;
  }
}

function login(){
    global $username, $password;
    include("connection.php");
  
    $errors = [];
  
      // form validation: ensure that the form is correctly filled
      if (empty($username)) { 
          $errors[] = "Username is required"; 
      }
      if (empty($password)) { 
          $errors[] = "Password is required"; 
    }
    
    $users = select_users();
    if (!in_array($username, $users)) {
      $errors[] = "User with this username does not exists";      
    }
  
    if (!check_password($username, $password)){
      $errors[] = "Incorrect password";
    }
  
    if (count($errors) == 0){
      $_SESSION['user'] = $username; 
          $_SESSION['success']  = "You are now logged in";
    } else {
      foreach($errors as $error){
        echo "<h1>".$error."</h1>";
      }
    }
  }
  
function clear_input ($input) {
    $clean_input = strip_tags($input);
    $clean_input = htmlentities($clean_input, ENT_QUOTES, 'UTF-8');
    return $clean_input;
  }
  
  function select_users(){
    include("connection.php");
    try {
      $query = $db->prepare("SELECT username FROM Users");
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);
    } catch (PDOException $e) {
      echo "Failed to retrieve data: ".$e->getMessage();
    }
    return $result;
  }

  
function register(){
	// call these variables with the global keyword to make them available in function
  global $username, $password, $password_conf;
  include("connection.php");

  $errors = [];

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { 
		$errors[] = "Username is required"; 
	}
	if (empty($password)) { 
		$errors[] = "Password is required"; 
	}
	if (empty($password_conf)) { 
		$errors[] = "Password must be confirmed"; 
  }
  if ($password != $password_conf) {
    $errors[] = "Passwords must match";
  }
  $users = select_users();
  if (in_array($username, $users)) {
    $errors[] = "User with this username already exists";      
  }

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database
    
    try {
      $query = $db->prepare("INSERT INTO Users(username, password) VALUES (?, ?)");
      $query->bindParam(1,$username,PDO::PARAM_STR);
      $query->bindParam(2,$password,PDO::PARAM_STR);
      $query->execute();
    } catch (PDOException $e) {
      echo "Failed to insert user: ".$e->getMessage();
    }

    $_SESSION['user'] = $username; 
		$_SESSION['success']  = "You are now logged in";
		
	} else {
    foreach($errors as $error){
      echo "<h1>".$error."</h1>";
    }
  }
}

function redirect($url) {
  ob_start();
  header('Location: '.$url);
  ob_end_flush();
  die();
}
