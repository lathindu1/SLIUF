<!-- <!DOCTYPE html>
<html>
<head>

</head>
<body> -->

<?php
include('../../../php/config.php');
$fid = $_GET['q'];
// $fname = "It (technology field)";
$sql="SELECT * FROM forum_list WHERE fid_fk= ".$fid;
// echo $sql."<br/>";
$result = mysqli_query($conn,$sql);

echo '<label for="forum" >Forum (Select one):</label>';
echo '<select class="form-control" name="forum"  id="forum" onchange="setnewforum(this.value)" >';
echo '<option>...</option>';
while($row = mysqli_fetch_array($result)) {
     echo '<option value="'.$row['Id'].'"> '. $row['forum'] . '</option>';
    // echo $row['forum'];
}
echo '<option value="20ab" >Not in list-Make a New </option>';
echo '</select>';
mysqli_close($conn);
?>
<!-- </body>
</html> -->