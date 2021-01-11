<?php

include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT *
FROM Employee AS emp
INNER JOIN Education_Master AS edu
ON emp.Emp_Education_Id=edu.Education_Id
WHERE edu.Education_Level='PG'";
$result = mysqli_query($conn,$sql);

echo "<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Education</th>

</tr>";
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['Emp_id'] . "</td>";
    echo "<td>" . $row['Emp_Name'] . "</td>";
    echo "<td>" . $row['Education_Desc'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>