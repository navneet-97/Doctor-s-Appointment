<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Doctor Appointment Dashboard</title>
</head>
<body>
<h1>Doctor Appointment Dashboard</h1>
<h2>Doctors</h2>
<ul>
<?php
$sql = "SELECT * FROM doctors";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
echo "<li>{$row['name']} ({$row['specialty']})</li>";
}
} else {
echo "No doctors found.";
}
mysqli_close($conn);
?>
</ul>
<a href="add_appointment.php">Add Appointment</a>
<a href="view_appointments.php">View Appointments</a>
</body>
</html>
