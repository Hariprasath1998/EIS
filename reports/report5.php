<?php
$q = $_GET['q'];
include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
$sql="SELECT * FROM Employee AS e INNER JOIN Company_Location AS cl ON e.Emp_Location_Id = cl.Location_Id INNER JOIN Country_Master AS cm ON cl.Country_Id=cm.Country_Id WHERE cm.Country_Name = '".$q."'";
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