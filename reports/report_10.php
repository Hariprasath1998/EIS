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

include '../includes/connect.php';

mysqli_select_db($conn,"ajax_demo");
$sql="SELECT SUM(Emp_Salary) FROM Employee WHERE Emp_Dept_Id IN ( SELECT Dept_Id FROM Department_Master WHERE Dept_Name = '".$q."' )";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
  echo "<h1>Total Expenditure in ".$q.": ". $row[0] . "</h1>";
}

mysqli_close($conn);
?>
</body>
</html>