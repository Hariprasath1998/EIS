<?php
$q = $_GET['q'];

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT SUM(Emp_Salary) FROM Employee AS e
INNER JOIN Department_Master AS d
ON e.Emp_Dept_Id=d.Dept_Id
WHERE d.Dept_Name='".$q."'";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
  echo "<h1>Total Expenditure in ".$q.": ". $row[0] . "</h1>";
}

mysqli_close($conn);
?>
</body>
</html>