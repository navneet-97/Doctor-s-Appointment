<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Add Appointment</title>
</head>
<body>
<h1>Add Appointment</h1>
<form method="post" action="process_appointment.php">
<label>Patient Name:</label>
<input type="text" name="patient_name" required><br><br>
<label>Appointment Date:</label>
<input type="datetime-local" name="appointment_date" required><br><br>
<label>Doctor:</label>
<select name="doctor_id" required>
<?php
$sql = "SELECT * FROM doctors";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<option value='{$row['id']}'>{$row['name']}
({$row['specialty']})</option>";
}
} else {
echo "<option value=''>No doctors available</option>";
}
?>
</select><br><br>
<input type="submit" value="Add Appointment">
</form>
</body>
</html>
