<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = $_GET['q'];
echo $q;

include '../includes/connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM Employee WHERE Emp_Designation_Id IN ( SELECT Designation_Id FROM Designation_Master WHERE Designation_Desc = '".$q."' )";
$result = mysqli_query($conn,$sql);


echo "<table>
<tr>
<th>Employee ID</th>
<th>Name</th>

</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Emp_id'] . "</td>";
    echo "<td>" . $row['Emp_Name'] . "</td>";
    echo "</tr>";
}
echo "</table>";



mysqli_close($conn);
?>
</body>
</html>