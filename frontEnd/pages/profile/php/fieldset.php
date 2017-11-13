<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include('../../../php/config.php');
// $fname = $_GET['field'];
// $fname = "It (technology field)";
$sql1="SELECT * FROM field_set ";
$result1 = mysqli_query($conn,$sql1);

echo '<div class="col-sm-12">';
echo '<ul class="list-group text-left">';

while($row = mysqli_fetch_array($result1)) {
    $name=$row['f_name'];
    $id=$row['id'];
    $sql2="SELECT * FROM tread_list WHERE Field_Id=".$id;
    $result2 = mysqli_query($conn,$sql2);
    $rcount = mysqli_num_rows($result2);

    echo '<li class="list-group-item"><a href="#">'.$name.'</a><span class="badge">Treads: '.$rcount.'</span> </li>';
}
echo '  </ul>';
echo '</div>';
mysqli_close($conn);
?>
</body>
</html>

                                    
                                        
                                            
                                      
                                    