
<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
</head>
<body>

<h2>Personal Information Form</h2>

<form action="save.php" method="POST">

    <label>Full Name:</label>
    <input type="text" name="name" required>
    <br><br>

    <label>Roll Number:</label>
    <input type="number" name="roll_no" required>
    <br><br>

    <label>Date of Birth:</label>
    <input type="date" name="dob" required>
    <br><br>

    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>

    <label>Father's Name:</label>
    <input type="text" name="father_name" required>
    <br><br>

    <label>Mother's Name:</label>
    <input type="text" name="mother_name" required>
    <br><br>

    <label>Parent's Email:</label>
    <input type="email" name="parent_email">
    <br><br>

    <label>Blood Group:</label>
    <select name="blood_group">
        <option value="">Select</option>
        <option value="A+">A+</option>
        <option value="A-">A-</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
        <option value="AB+">AB+</option>
        <option value="AB-">AB-</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
    </select>
    <br><br>

    <label>Education:</label>
    <input type="text" name="education" required>
    <br><br>

    <label>Gender:</label>
    <select name="gender" required>
        <option value="">Select</option>
        <option value="Female">Female</option>
        <option value="Male">Male</option>
        <option value="Other">Other</option>
        <option value="Prefer not to say">Prefer not to say</option>
    </select>
    <br><br>

    <button type="submit">Save Information</button>

</form>

</body>
</html>
