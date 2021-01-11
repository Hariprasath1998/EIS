<?php
$q = intval($_GET['q']);
    
include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
// $sql="SELECT * FROM user WHERE id = '".$q."'";
$sql="SELECT * FROM `Employee` WHERE Emp_Salary > ".$q;
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Salary</th>

</tr>";

while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Emp_id'] . "</td>";
    echo "<td>" . $row['Emp_Name'] . "</td>";
    echo "<td>" . $row['Emp_Salary'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>
</body>
</html>