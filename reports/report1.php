<?php
$q = $_GET['q'];

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT * FROM Employee AS e
INNER JOIN Department_Master AS d
ON e.Emp_Dept_Id=d.Dept_Id
WHERE d.Dept_Name='".$q."'";
$result = mysqli_query($conn,$sql);


echo "<table>
<tr>
<th>Id</th>
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