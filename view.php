
<?php
include "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
</head>
<body>

<h2>Saved Student Information</h2>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Roll No</th>
    <th>Date of Birth</th>
    <th>Email</th>
    <th>Father Name</th>
    <th>Mother Name</th>
    <th>Parent Email</th>
    <th>Blood Group</th>
    <th>Education</th>
    <th>Gender</th>
</tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row['id']) . "</td>";
    echo "<td>" . htmlspecialchars($row['name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['roll_no']) . "</td>";
    echo "<td>" . htmlspecialchars($row['dob'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['email'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['father_name'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['mother_name'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['parent_email'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['blood_group'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['education'] ?? '') . "</td>";
    echo "<td>" . htmlspecialchars($row['gender'] ?? '') . "</td>";
    echo "</tr>";
}
?>

</table>

<br>
<a href="index.php">Add New Student</a>

</body>
</html>

<?php
mysqli_close($conn);
?>
