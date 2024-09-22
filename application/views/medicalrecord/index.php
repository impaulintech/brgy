<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"> -->
	<title>Schedule</title>
</head>

<body>

	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		th,
		td {
			text-align: center;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #f2f2f2
		}

		th {
			background-color: black;
			color: white;
		}
	</style>

	<div>
		<h1 style="text-align: center;">Barangay Employee</h1>
	</div>

	<div class="container">

		<table class="table-list table table-striped  text-center" id="">
			<thead style="background-color:black;" class="text-white">
				<tr>
					<th>Patient_id</th>
					<th>FullName</th>
					<!-- <th>Address</th>
                 <th>Religion</th>
                 <th>Birthdate</th>
                 <th>Age</th>
                 <th>Sex</th>
                 <th>No_number</th>
                 <th>Illness</th>
                 <th>Description</th> -->
					<th>Option</th>
				</tr>
			</thead>

			<?php foreach ($medicalrecord as $medicalrecord) : ?>
				<tbody>
					<tr>
						<td><?= $medicalrecord->id ?></td>
						<td><?= $medicalrecord->FullName ?> </td>
						<!-- <td><?= $medicalrecord->Address ?></td>
                 <td><?= $medicalrecord->Religion ?></td>
                 <td><?= $medicalrecord->Birthdate ?></td>
                 <td><?= $medicalrecord->Age ?></td>
                 <td><?= $medicalrecord->Sex ?></td>
                 <td><?= $medicalrecord->No_number ?></td>
                 <td><?= $medicalrecord->Illness ?></td>
                 <td><?= $medicalrecord->Description ?></td> -->

						<td>
							<a href="<?= site_url('medicalrecord/view/' . $medicalrecord->id) ?>"><button type="button" class="btn btn-primary">view</button></a>
							<a href="<?= site_url('medicalrecord/delete/' . $medicalrecord->id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
						</td>
					</tr>
				</tbody>
			<?php endforeach ?>
		</table>


		<!---------------------------------------------------- modal Add ------------------------------------>
		<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
			Add New
		</button>

		<!-- <a href="<?= site_url('doctorinfo/add') ?>" class="btn btn-light btn-lg active mt-3" role="button" aria-pressed="true">Add New Nurseinfo</a> -->
		<!-- <form action="<?= site_url('doctorinfo/add') ?>" method="post"> -->
		<div class="container">
			<div class="modal fade" id="BackdropAdd" data-backdrop="static" data-keyboard="false" tabindex="-1"
				aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
						<div class="modal-header">
							<div class="col-lg-4">

							</div>
							<div class="col-lg-4">
								<h5 class="modal-title col-12 text-center" id="staticBackdropLabel">Add
								</h5>
							</div>
							<div class="col-lg-4">
								<!-- <a href="<?= site_url('doctorinfo') ?>"> -->
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
								<!-- </a> -->
							</div>
						</div>


						<div class="modal-body">
							<form action="<?= site_url('medicalrecord/add') ?>" method="post">

								<div class="row">
									<div class="col">

										<label for="FullName">FullName :</label>
										<input type="text" class="form-control" placeholder="FullName" id="FullName"
											name="FullName" value="" required="">
									</div>
									<div class="col">

										<label for="Address">Address :</label>
										<input type="text" class="form-control" placeholder="Address" id="Address"
											name="Address" value="" required="">
									</div>
									<div class="col">

										<label for="Religion">Religion :</label>
										<input type="text" class="form-control" placeholder="Religion" id="Religion" name="Religion"
											value="" required="">
									</div>
								</div>
								<div class="row">
									<div class="col">

										<label for="Birthdate">Birthdate:</label>
										<input type="date" class="form-control" placeholder="Birthdate" id="Birthdate"
											name="Birthdate" value="" required="">
									</div>
									<div class="col">

										<label for="Age">Age :</label>
										<input type="text" class="form-control" placeholder="Age" id="Age"
											name="Age" value="" required="">
									</div>

								</div>
								<div class="col">
									<label for="Sex">Sex :</label>
									<input type="text" class="form-control" placeholder="Sex" id="Sex" name="Sex"
										value="" required="">
								</div>
								<div class="col">
									<label for="No_number">No_number :</label>
									<input type="text" class="form-control" placeholder="No_number" id="No_number" name="No_number"
										value="" required="">
								</div>
								<div class="col">
									<label for="Illness">Illness :</label>
									<input type="text" class="form-control" placeholder="Illness" id="Illness" name="Illness"
										value="" required="">
								</div>
								<div class="col">
									<label for="Description">Description :</label>
									<input type="text" class="form-control" placeholder="Description" id="Description" name="Description"
										value="" required="">
								</div>
						</div>


						<div class="modal-footer">
							<a href="<?= site_url('doctorinfo') ?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
							<button type="submit" class="btn btn-primary">Add</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-2">

		</div>





</body>

</html>
