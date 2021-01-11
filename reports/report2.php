<?php
$q = strval($_GET['q']);
include '../includes/connect.php';

mysqli_select_db($conn,"EIS");
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