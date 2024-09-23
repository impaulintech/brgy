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

	<!-- Load FullCalendar JS -->
	<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
	<script>
		const devURL = window.location.origin + window.location.pathname;
		document.addEventListener('DOMContentLoaded', function() {
			const calendarEl = document.getElementById('calendar');
			const calendar = new FullCalendar.Calendar(calendarEl, {
				headerToolbar: {
					left: 'prev,next today',
					center: 'title',
					right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
				},
				events: function(fetchInfo, successCallback, failureCallback) {
					fetch(devURL + '/../api/schedules')
						.then(response => response.json())
						.then(data => {
							console.log(data);
							const events = data.schedules.map(event => ({
								title: event.ill_name,
								start: event.AppointmentDate,
							}));
							successCallback(events);
						})
						.catch(error => {
							console.error('Error fetching events:', error);
							failureCallback(error);
						});
				}
			});
			calendar.render();
		});
	</script>

	<div class="container" style="padding: 40px 20px;">


		<div>
			<h1 style="text-align: center;">Scheduling</h1>
		</div>
		<!---------------------------------------------------- modal Add ------------------------------------>
		<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
			Add New
		</button>
		<br>
		<div id="calendar"></div>

		<br>
		<div>
			<h1 style="text-align: center;">Schedule logs</h1>
		</div>
		<table class="table-list table table-striped  text-center" id="">
			<thead style="background-color:black;" class="text-white">
				<tr>
					<th>Resident_id</th>
					<th>FirstName</th>
					<!-- <th>MiddleName</th> -->
					<th>LastName</th>
					<!-- <th>Address</th>
                 <th>Birthdate</th>
                 <th>Age</th>
                 <th>Sex</th>
                 <th>Status</th>
                 <th>Contact_Num</th> -->
					<!-- <th>AppointmentDate</th> -->
					<!-- <th>Description</th> -->
					<th>Option</th>
				</tr>
			</thead>

			<?php foreach ($schedule as $schedule) : ?>
				<tbody>
					<tr>
						<td><?= $schedule->id ?></td>
						<td><?= $schedule->FirstName ?> </td>
						<!-- <td><?= $schedule->MiddleName ?></td> -->
						<td><?= $schedule->LastName ?></td>
						<!-- <td><?= $schedule->Address ?></td>
                 <td><?= $schedule->Birthdate ?></td>
                 <td><?= $schedule->Age ?></td>
                 <td><?= $schedule->Sex ?></td>
                 <td><?= $schedule->Status ?></td>
                 <td><?= $schedule->Contact_Num ?></td> -->
						<!-- <td><?= $schedule->AppointmentDate ?></td> -->
						<!-- <td><?= $schedule->Description ?></td> -->
						<!-- <td><?= $schedule->Option ?></td> -->
						<td>
							<a href="<?= site_url('schedule/view/' . $schedule->id) ?>"><button type="button" class="btn btn-primary">view</button></a>
							<a href="<?= site_url('schedule/delete/' . $schedule->id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>
						</td>
					</tr>
				</tbody>
			<?php endforeach ?>
		</table>


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
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>

							</div>
						</div>

						<form action="<?= site_url('schedule/add') ?>" method="post">
							<div class="modal-body">


								<div class="row">
									<div class="col">

										<label for="FirstName">FirstName :</label>
										<input type="text" class="form-control" placeholder="FirstName" id="FirstName"
											name="FirstName" value="" required="">
									</div>
									<div class="col">

										<label for="MiddleName">MiddleName :</label>
										<input type="text" class="form-control" placeholder="MiddleName" id="MiddleName"
											name="MiddleName" value="" required="">
									</div>
									<div class="col">

										<label for="LastName">LastName :</label>
										<input type="text" class="form-control" placeholder="LastName" id="LastName" name="LastName"
											value="" required="">
									</div>
								</div>
								<div class="row">
									<div class="col">

										<label for="Address">Address:</label>
										<input type="text" class="form-control" placeholder="Address" id="Address"
											name="Address" value="" required="">
									</div>
									<div class="col">

										<label for="Birthdate">Birthdate :</label>
										<input type="date" class="form-control" placeholder="Birthdate" id="Birthdate"
											name="Birthdate" value="" required="">
									</div>

								</div>
								<div class="col">
									<label for="Age">Age :</label>
									<input type="text" class="form-control" placeholder="Age" id="Age" name="Age"
										value="" required="">
								</div>
								<div class="col">
									<label for="Sex">Sex :</label>
									<input type="text" class="form-control" placeholder="Sex" id="Sex" name="Sex"
										value="" required="">
								</div>
								<div class="col">
									<label for="Status">Status :</label>
									<input type="text" class="form-control" placeholder="Status" id="Status" name="Status"
										value="" required="">
								</div>
								<div class="col">
									<label for="Contact_Num">Contact_Num :</label>
									<input type="text" class="form-control" placeholder="Contact_Num" id="Contact_Num" name="Contact_Num"
										value="" required="">
								</div>
								<div class="col">
									<label for="AppointmentDate">AppointmentDate :</label>
									<input type="date" class="form-control" placeholder="AppointmentDate" id="AppointmentDate" name="AppointmentDate"
										value="" required="">
								</div>
								<div class="col">
									<label for="ill_id">Illness :</label>
									<select class="form-control" name="ill_id" id="ill_id" placeholder="Illness" required="">
										<option value="1">Lagnat</option>
										<option value="2">Trankaso</option>
										<option value="3">Covid-19</option>
										<option value="4">Migrane</option>
										<option value="5">Cancer</option>
										<option value="6">Aids</option>
									</select>
								</div>
								<!-- <div class="col">
                             <label for="Description">Description :</label>
                             <input type="text" class="form-control" placeholder="Description" id="Description" name="Description"
                                 value="" required="">
                         </div> -->
							</div>


							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Add</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-lg-2">

		</div>

		<!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
        <script src="<?= base_url('assets/js/popper.js') ?>"></script> -->

		<!-- <script>
        $(document).ready(function() {
            $("#BackdropAdd").modal('show');
        });
        </script> -->



</body>

</html>
