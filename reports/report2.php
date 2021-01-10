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
$q = strval($_GET['q']);
include '../includes/connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT * FROM `Employee` WHERE Emp_Join_Date > '".$q."'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Join Date</th>

</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
  echo "<td>" . $row['Emp_id'] . "</td>";
  echo "<td>" . $row['Emp_Name'] . "</td>";
  echo "<td>" . $row['Emp_Join_Date'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>