<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
	<title>Add </title>
</head>

<body>

	<form action="<?= site_url('schedule/add') ?>" method="post">
		<div class="container-fluid">
			<div class="container">

				<h1>Add New schedule</h1>

				<?php if (validation_errors()) {
					echo validation_errors();
				}
				?>




				<!-- <label for="Specialization">Select Specialization :</label>
            <select class="form-control" name="Specialization" id="Specialization" required="">
                 <option>Select Specialization</option>
                 <option value="7">Oncology</option>
                 <option value="6">Neurology</option>
                 <option value="5">Hematology</option>
                 <option value="4">Cardiology</option>
                 <option value="3">Dermatology</option>
                 <option value="2">Endocrinology</option>
                 <option value="1">Gastroenterology</option>
             </select> -->
				<br>
				<label for="FirstName">FirstName: </label>
				<input type="text" id="FirstName" name="FirstName" value="">
				</br>
				<br>
				<label for="MiddleName">MiddleName: </label>
				<input type="text" id="MiddleName" name="MiddleName" value="">
				</br>
				<br>
				<label for="LastName">LastName: </label>
				<input type="text" id="LastName" name="LastName" value="">
				</br>
				<br>
				<label for="Address">Address: </label>
				<input type="text" id="ContactNum" name="ContactNum" value="">
				</br>
				<br>
				<label for="Birthdate">Birthdate: </label>
				<input type="text" id="Birthdate" name="Birthdate" value="">
				</br>
				<br>
				<label for="Age">Age: </label>
				<input type="text" id="Age" name="Age" value="">
				</br>
				<br>
				<label for="Sex">Sex: </label>
				<input type="text" id="Sex" name="Sex" value="">
				</br>
				<br>
				<label for="Status">Status: </label>
				<input type="text" id="Status" name="Status" value="">
				</br>
				<br>
				<label for="Contact_Num">Contact_Num: </label>
				<input type="text" id="Contact_Num" name="Contact_Num" value="">
				</br>
				<br>
				<label for="AppointmentDate">AppointmentDate: </label>
				<input type="text" id="AppointmentDate" name="AppointmentDate" value="">
				</br>
				<br>
				<label for="Description">Description: </label>
				<input type="text" id="Description" name="Description" value="">
				</br>
				<br>
				<input type="submit" value="Register">
				</br>
				<script src="<?= base_url('assets/js/jquery.js') ?>"></script>
				<script src="<?= base_url('assets/js/popper.js') ?>"></script>
				<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

</body>
</form>

</html>
