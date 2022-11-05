<?php 
	include 'includes/session.php';

	if(isset($_POST['id'])){
		$id = $_POST['id'];
		// $sql = "SELECT *, employees.id as empid FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id WHERE employees.id = '$id'";
		$sql = "SELECT *, employees.id as empid, SUM(num_hr) AS total_hr FROM employees LEFT JOIN position ON position.id=employees.position_id LEFT JOIN schedules ON schedules.id=employees.schedule_id LEFT JOIN attendance ON attendance.employee_id=employees.id WHERE employees.id = '$id'";
		$query = $conn->query($sql);
		$row = $query->fetch_assoc();

		echo json_encode($row);
	}
?>