<?php
include('config.php');
session_start();
$sql = "SELECT * FROM reg_data WHERE index_number = ".$index;
$result= mysqli_query($conn,$sql);





?>