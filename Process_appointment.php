<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$patientName = $_POST["patient_name"];
$appointmentDate = $_POST["appointment_date"];
$doctorId = $_POST["doctor_id"];
$sql = "INSERT INTO appointments (patient_name, appointment_date,
doctor_id) VALUES ('$patientName', '$appointmentDate', '$doctorId')";
if (mysqli_query($conn, $sql)) {
echo "Appointment added successfully.";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
