<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
session_start();
include('../../../php/config.php');
$index = $_SESSION['index'];
$sql1="SELECT * FROM user_data WHERE index_number_fk= '".$index."'";
$result1 = mysqli_query($conn,$sql1);
$interests="";
while ($row = mysqli_fetch_array($result1)) {
    $interest1 = $row['interrests3'];

}
$sql2="SELECT * FROM field_set WHERE id= ".$interest1;
$result2 = mysqli_query($conn,$sql2);
$inname="";
while ($row = mysqli_fetch_array($result2)) {
    $inname = $row['f_name'];

}
//echo $interest1;


$sql2="SELECT * FROM (SELECT * FROM tread_list WHERE Field_Id='".$interest1."' ORDER BY Tread_Id DESC LIMIT 3) t ORDER BY Tread_Id ASC";
echo ' <div class="panel panel-default">
                        <div class="panel-heading">'.$inname.' Field
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#inthree">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="inthree" class="collapse in">
                            <div class="panel-body">
                                <div class="row" >
';
$result2 = mysqli_query($conn,$sql2);
    while($row = mysqli_fetch_array($result2))
    {
        $treadId =$row['Tread_Id'];
        $forumId =$row['Forum_Id'];
        $fieldId =$interest1;
        $TreadTitle = $row['Tread_Title'];
        $TreadData = $row['Tread_data'];
        $TreadDateTime = $row['Data_time'];
        $indexnum=$row['user_Id'];
        $comment="";
        $sql3 = "SELECT * FROM treads_comments WHERE tId=".$treadId;
        $result3 = mysqli_query($conn,$sql3);
        while ($row1 = mysqli_fetch_array($result3)) {
            $cUser = $row1['uId'];
        }
        $sql4="SELECT * FROM user_data WHERE index_number_fk= '".$indexnum."'";
        $result4 = mysqli_query($conn,$sql4);
        while ($row1 = mysqli_fetch_array($result4)) {
            $image = $row1['image'];
            $fname = $row1['first_name'];
            $lname = $row1['last_name'];
        }
        $image2="../../img/profilepics/".$image;
        $cnum=mysqli_num_rows($result3);
        echo '<div class="row">';
        echo '<div class="col-sm-3">';
        echo '<div class="well">';
        echo'<p>';
        echo '<a href="">'.$fname.' '.$lname.'</a>';
        echo '</p>';
        echo '<img src="'.$image2.'" class="img-circle" height="55" width="55" alt="Avatar">';
        echo '</div>';
        echo '</div>';
        echo  '<div class="col-sm-9">';
        echo '<div class="well">';
        echo '<h4>';
        echo '<a href="">'.$TreadTitle.'</a> ';
        echo '</h4>';
        echo '<p>'.$TreadData.'</p>';
        echo'<p class="text-warning">'.$TreadDateTime.' Comments:'.$cnum.'</p>';
        echo '</div></div></div>';
    }
     echo '  </div></div></div></div>';

mysqli_close($conn);
?>
</body>
</html>