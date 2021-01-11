<?php

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT e.Emp_id, Emp_Name, Emp_Salary,Child FROM Employee AS e INNER JOIN Family_Details AS fd ON e.Emp_id = fd.Emp_Id WHERE fd.Child >=2";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Number of Children</th>

</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Emp_id'] . "</td>";
    echo "<td>" . $row['Emp_Name'] . "</td>";
    echo "<td>" . $row['Child'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>