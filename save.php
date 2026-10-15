
<?php
include "db.php";

$name = $_POST['name'];
$roll_no = (int)$_POST['roll_no'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$parent_email = $_POST['parent_email'] ?? '';
$blood_group = $_POST['blood_group'] ?? '';
$education = $_POST['education'];
$gender = $_POST['gender'];

$sql = "INSERT INTO students
(name, roll_no, dob, email, father_name, mother_name,
parent_email, blood_group, education, gender)
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

mysqli_stmt_bind_param(
    $stmt,
    "sissssssss",
    $name,
    $roll_no,
    $dob,
    $email,
    $father_name,
    $mother_name,
    $parent_email,
    $blood_group,
    $education,
    $gender
);

if (mysqli_stmt_execute($stmt)) {
    echo "Student information saved successfully!";
} else {
    echo "Error: " . mysqli_stmt_error($stmt);
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
