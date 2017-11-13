<?php
	include_once('config.php');
	$error  = array();
	$res    = array();
	$success = "";
		if(empty($_POST['lg_username']))
		{
			$error[] = "lg_username field is required";	
		}
	
		if(empty($_POST['lg_password']))
		{
			$error[] = "Password field is required";	
		}
		// if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false && $_POST['email']!= "" ) {
     
        // } else {
        //   $error[] = "Enter Valid Email address";
        //  }
		if(count($error)>0)
		{
			$resp['msg']    = $error;
			$resp['status'] = false;	
			echo json_encode($resp);
			exit;
        }
        $salt="asd123xdsc5hjfsadlh54546df";
        $password= $_POST['lg_password'];
        $password = $salt.$password.$salt;
	    $statement = $db_con->prepare("select * from reg_data where index_number = :index AND password = :password" );
        $statement->execute(array(':index' => $_POST['lg_username'],'password'=> $password));
		$row = $statement->fetchAll(PDO::FETCH_ASSOC);
		if(count($row)>0)
		{
		  session_start();
		  $_SESSION['user_id'] = $row[0]['index_number'];
		  $resp['redirect']    = "../pages/profile.php";
		  $resp['status']      = true;	
		  echo json_encode($resp);
		  exit;	
		}
		else
		{
		   $error[] = "indexNum and password does not match";
		  $resp['msg']    = $error;
		  $resp['status']      = false;	
		  echo json_encode($resp);
		  exit;	
		} 
?>