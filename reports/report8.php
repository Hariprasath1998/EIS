<?php

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
// $sql="SELECT COUNT(`Emp_Id`) FROM Account_Details;";
$sql="SELECT COUNT(e.Emp_Id) FROM Employee AS e INNER JOIN Account_Details AS a ON e.Emp_id=a.Emp_Id";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)){
    echo "<h1>Number of Employees with Bank Account: ". $row[0] . "</h1>";
}



mysqli_close($conn);
?>
</body>
</html>