<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
include('../../../php/config.php');
$dt = new DateTime("now", new DateTimeZone('Asia/Colombo'));
$index = $_SESSION['index'];
//$index = $_POST['in'];
$foId = $_POST['forum'];
$fiId = $_POST['field'];
$tTitle = $_POST['tread_title'];
$tData = $_POST['tread_data'];
$dateTime = $dt->format('y-m-d H:i:s');
if($foId=="20ab")
{   
    $nfoId=null;
    $foname = $_POST['f_new'];
    $sql1="INSERT INTO forum_list (Id,forum,fid_fk) VALUE('','".$foname."','".$fiId."') ";
    echo $sql1."<br/>";
    $result = mysqli_query($conn,$sql1);
    $sql2 = "SELECT * FROM forum_list WHERE forum= '".$foname."'";
    echo $sql2."<br/>";
    $result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_array($result2))
    {
        $nfoId =$row['Id'];
    }
    $sql3="INSERT INTO tread_list (Tread_Id,Field_Id,Forum_Id,Tread_Title,Tread_data,user_Id,Data_time) VALUES ('','".$fiId."','".$nfoId."','".$tTitle."','".$tData."','".$index."','".$dateTime."')";
    echo $sql3."<br/>";
    $result2 = mysqli_query($conn,$sql3);
    

}
else {
    

$sql="INSERT INTO tread_list (Tread_Id,Field_Id	,Forum_Id,Tread_Title,Tread_data,user_Id,Data_time) VALUES ('','".$fiId."','".$foId."','".$tTitle."','".$tData."','".$index."','".$dateTime."')";
//  echo $sql."<br/>";
$result = mysqli_query($conn,$sql);
}
// echo '<script> alert("done");</script>';
mysqli_close($conn);




?>
</body>
</html>