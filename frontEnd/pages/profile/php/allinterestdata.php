<?php
session_start();
include('../../../php/config.php');
$index = $_SESSION['index'];
$sql1="SELECT * FROM user_data WHERE index_number_fk= '".$index."'";
$result1 = mysqli_query($conn,$sql1);
$interest1="";
$interest2="";
$interest3="";
while ($row = mysqli_fetch_array($result1)) {
    $interest1 = $row['interrests1'];
    $interest2 = $row['interrests2'];
    $interest3 = $row['interrests3'];

}
$sql2="SELECT * FROM field_set ";
$result2 = mysqli_query($conn,$sql2);
echo ' <p>Interests</p> <p>';
while ($row = mysqli_fetch_array($result2)) {
  
    if ($interest1 == $row['id']) {
        echo ' <span class="label label-primary">'.$row['f_name'].'</span>';
    }
     if ($interest2 == $row['id']) {
        echo '<span class="label label-warning">'.$row['f_name'].'</span>';
    }
     if ($interest3 == $row['id']) {
         echo '<span class="label label-danger">'.$row['f_name'].'</span>';
        
    }

}//echo $interest1;
echo '</p>';







?>