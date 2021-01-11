<?php
$q = $_GET['q'];

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT COUNT(Emp_Name) FROM Employee WHERE Emp_Dept_Id IN ( SELECT Dept_Id FROM Department_Master WHERE Dept_Name= '".$q."' ) AND Emp_Designation_Id=1";
$result = mysqli_query($conn,$sql);


while($row = mysqli_fetch_array($result)){
    echo "<h1>Number of Technical Managers in ".$q.": ". $row[0] . "</h1>";
}



mysqli_close($conn);
?>
</body>
</html>