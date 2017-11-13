<?php
include('../../../php/config.php');
session_start();
$index = $_SESSION['index']="142000";
$sql1="SELECT * FROM user_data WHERE index_number_fk= '".$index."'";
$result1 = mysqli_query($conn,$sql1);
$fname="";
$image="";
while ($row = mysqli_fetch_array($result1)) {
    $fname = $row['first_name'];
    $image = $row['image'];

}
$image2="../../img/profilepics/".$image;
// echo $image2;
$sql2="SELECT * FROM (SELECT * FROM tread_list WHERE user_Id='".$index."' ORDER BY Tread_Id DESC LIMIT 3) t ORDER BY Tread_Id ASC";

$result2 = mysqli_query($conn,$sql2);

echo ' <div class="panel panel-default">
                        <div class="panel-heading">Treads by you
                            <button type="button" class="btn pull-right" style="background:transparent;" data-toggle="collapse" data-target="#one">
                                <span class="glyphicon glyphicon-plus-sign"></span>
                            </button>
                        </div>
                        <div id="one" class="collapse in">
                            <div class="panel-body">
                                <div class="row" >
';



    while($row = mysqli_fetch_array($result2))
    {
        $treadId =$row['Tread_Id'];
        $forumId =$row['Forum_Id'];
        $fieldId =$row['Field_Id'];
        $TreadTitle = $row['Tread_Title'];
        $TreadData = $row['Tread_data'];
        $TreadDateTime = $row['Data_time'];
        $comment="";
        $sql3 = "SELECT * FROM treads_comments WHERE tId=".$treadId;
        $result3 = mysqli_query($conn,$sql3);
        while ($row1 = mysqli_fetch_array($result3)) {
            $cUser = $row1['uId'];
        }
        $cnum=mysqli_num_rows($result3);
        echo '<div class="row">';
        echo '<div class="col-sm-3">';
        echo '<div class="well">';
        echo'<p>';
        echo '<a href="">'.$fname.'</a>';
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
        
        // echo '<p>Comments:''</p>';
        echo '</div></div></div>';
    }
 echo '<button type="button" class="btn btn-success " value="'.$treadId.'" onclick="viewtlist(this.value)" >View More</button>';
echo '
     </div> </div></div></div>
';









?>