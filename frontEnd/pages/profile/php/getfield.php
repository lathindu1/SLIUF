<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
include('../../../php/config.php');
// $fname = $_GET['field'];
// $fname = "It (technology field)";
$sql="SELECT * FROM field_set ";
// echo $sql."<br/>";
$result = mysqli_query($conn,$sql);

echo '<label for="forum">Field (Select one):</label>';
echo '<select class="form-control" name="field"  id="field" onchange="showforums(this.value)" >';
echo '<option>...</option>';
while($row = mysqli_fetch_array($result)) {
    echo '<option value="'.$row['id'].'"> '. $row['f_name'] . '</option>';
    // echo $row['forum'];
}
echo '</select>';
mysqli_close($conn);
?>
</body>
</html>