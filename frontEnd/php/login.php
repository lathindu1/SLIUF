<?php
session_start();
	$error  = array();
	$res    = array();
	$success = "";
function password_make($password)
    {
        $salt="asd123xdsc5hjfsadlh54546df";
        $password1 = $salt.$password.$salt;
        $password_new = sha1($password1);
        return $password_new;

    }
function getData($index)
    {
        include('config.php');
        $password="";
        $sql1='SELECT * FROM reg_data Where index_number='.$index;
        $result1= mysqli_query($conn,$sql1);
         if (mysqli_num_rows($result1) > 0)
          {
    
              while($row = mysqli_fetch_assoc($result1))
                    {
                      $password=$row["password"];
                    }
                    return $password;
          } 
          else
           {
                 return "no";
           }

    }

    if(isset($_POST['submit']))
    {
   
        $key="studjnknzld646dnknd4knsfd5454j";
        $index_num = $_POST['lg-username'];
        $password = $_POST['lg-password'];
        $remember=$_POST['lg-remember'];
        $password = password_make($password);
        $password2=getData($index_num);
        if($password2 == "no" )
            {
                //error user is not in database
            }
        else
            {
               if($password == $password2)
               {
                   
		            $_SESSION['user_id'] = $index_num;
		            $resp['redirect']    = "../pages/profile.php";
		            $resp['status']      = true;	
		            echo json_encode($resp);
		            exit;	
                    // $_SESSION['ind']=$index_num;
                    // $_SESSION['passd']=$password;
                    // $_SESSION['kkey']=$key;
                    // header('Location: ../pages/profile.php');
               }
               else {
                    $error[] = "Email and password does not match";
                    $resp['msg']    = $error;
                    $resp['status']      = false;	
                    echo json_encode($resp);
                    exit;	
               }
            }


    }




?>