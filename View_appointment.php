<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>View Appointments</title>
</head>
<body>
<h1>View Appointments</h1>
<table>
<tr>
<th>Patient Name</th>
<th>Appointment Date</th>
<th>Doctor</th>
</tr>
<?php
$sql = "SELECT appointments.*, doctors.name AS doctor_name FROM
appointments JOIN doctors ON appointments.doctor_id = doctors.id";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>{$row['patient_name']}</td>";
echo "<td>{$row['appointment_date']}</td>";
echo "<td>{$row['doctor_name']}</td>";
echo "</tr>";
}
} else {
echo "<tr><td colspan='3'>No appointments found.</td></tr>";
}
?>
</table>
<br>
<a href="index.php">Back to Dashboard</a>
</body>
</html>
