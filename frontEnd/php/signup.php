<?php

session_start();




function store_data($index_num,$email,$password,$first_name,$last_name,$faculty)
    {
        include('config.php');
        $p_no = "";
        $description = "";
        $address = "";
        $image = "";
        $reset = "";
        $birthday = "";
        $sql1= "INSERT INTO reg_data (id,index_number,email,password,reset) VALUES ('','".$index_num."','".$email."','".$password."','".$reset."')";
        $sql2="INSERT INTO user_data (index_number_fk,first_name,last_name,phone_num,birthday,university,description,address,image) VALUES ('".$index_num."','".$first_name."','".$last_name."','".$p_no."','".$birthday."','".$faculty."','".$description."','".$address."','".$image."')";

        $result1 = mysqli_query($conn,$sql1);
        if($result1)
            {
                $result2= mysqli_query($conn,$sql2);
                if($result2)
                    {
                        // echo "successfully";
                        return "yes";
                    }
            }
    }


 function password_make($password)
    {
        $salt="asd123xdsc5hjfsadlh54546df";
        $password1 = $salt.$password.$salt;
        $password_new = sha1($password1);

        return $password_new;

    }
function validfinder($index)
    {
        include('config.php');
        
        $sql = "SELECT * FROM reg_data WHERE index_number = ".$index;
        $result= mysqli_query($conn,$sql);
      
        if(mysqli_num_rows($result) > 0)
            {
                //error there is a user
                $res = "yes" ;
                return $res;
            }
        else
            {
                $res = "no";
                return $res;
           
            }
    }

    if(isset($_POST['submit']))
    {
    
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $index_num = $_POST['index_number'];
        $email = $_POST['email'];
        $password = $_POST['password1'];
        $univercity = $_POST['uni'];
        $key="studjnknzld646dnknd4knsfd5454j";
        // echo $first_name."aaa";
        // echo "passs1- ".$password;
        $password = password_make($password);
        // echo "passs2- ".$password;
        if(validfinder($index_num) == "no" )
            {
                if(store_data($index_num,$email,$password,$first_name,$last_name,$univercity) == "yes")
                    {
                        $_SESSION['ind']=$index_num;
                        $_SESSION['passd']=$password;
                         $_SESSION['kkey']=$key;
                        header('Location: ../pages/profile.php');
                    }
                else 
                    {
                        //connection error
                        echo " connection error"; 
                        echo '<a href="../index.html">click to back</a>';
                    }
            }
        else
            {
                //error user id not available
                echo "username allready exist";
                echo '<a href="../index.html">click to back</a>';
            }


    }



?>