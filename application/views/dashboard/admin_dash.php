<div class="content-wrapper" style="padding: 40px 20px;">
	<!-- Content Header (Page header) -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
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
			<div class="row">
				<div class="col-lg-12">
					<div class="small-box bg-light">
						<div class="inner">
							<h3 id="user-name"><?= $user_name ?></h3>
							<p>Email: <span id="user-email"><?= $email ?></span></p>
							<p>Address: <span id="user-role"><?= $address ?></span></p>
							<p>Contact: <span id="user-role"><?= $contact ?></span></p>

							<!-- Schedule Appointment Button -->
							<div class="row">
								<div class="col-lg-12">
									<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
										<i class="fas fa-calendar-plus"></i> Schedule an Appointment
									</button>
								</div>
							</div>
						</div>
						<div class="icon">
							<i><img width="100" src="<?= base_url('assets/images/2.jpg') ?>"
									class="img-circle elevation-2"
									alt="User Image"></i>
						</div>
						<a href="#" class="small-box-footer" style="opacity: 0;">View Profile <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<br>
			<!-- Main row -->
			<div class="row">
				<!-- Cards on the left (30% width) -->
				<div class="col-lg-4 col-12 d-flex flex-column">
					<!-- First Row of Cards (Stacked in 1 column) -->
					<div class="row mb-3 flex-grow-1">
						<!-- Appointments Today -->
						<div class="col-12">
							<div class="small-box bg-primary h-100">
								<div class="inner">
									<h3 id="appointments-today"><?= $totalAppointmentsToday ?></h3>
									<p>Appointments Today</p>
								</div>
								<div class="icon">
									<i class="fas fa-calendar-check"></i>
								</div>
								<a href="#" class="small-box-footer" style="opacity: 0;">View All <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="row mb-3 flex-grow-1">
						<!-- Appointments This Week -->
						<div class="col-12">
							<div class="small-box bg-primary h-100">
								<div class="inner">
									<h3 id="appointments-week"><?= $totalAppointmentsThisWeek ?></h3>
									<p>Appointments This Week</p>
								</div>
								<div class="icon">
									<i class="fas fa-calendar-check"></i>
								</div>
								<a href="#" class="small-box-footer" style="opacity: 0;">View All <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<!-- Second Row of Cards -->
					<div class="row mb-3 flex-grow-1">
						<!-- Completed Appointments -->
						<div class="col-12">
							<div class="small-box bg-success h-100">
								<div class="inner">
									<h3 id="completed-appointments"><?= $completedAppointments ?></h3>
									<p>Completed Appointments</p>
								</div>
								<div class="icon">
									<i class="fas fa-calendar-check"></i>
								</div>
								<a href="#" class="small-box-footer" style="opacity: 0;">View All <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>

					<div class="row flex-grow-1">
						<!-- Canceled Appointments -->
						<div class="col-12">
							<div class="small-box bg-danger h-100">
								<div class="inner">
									<h3 id="canceled-appointments"><?= $canceledAppointments ?></h3>
									<p>Canceled Appointments</p>
								</div>
								<div class="icon">
									<i class="fas fa-calendar-times"></i>
								</div>
								<a href="#" class="small-box-footer" style="opacity: 0;">View All <i class="fas fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>

				<!-- Calendar on the right (60% width, max 400px height) -->
				<div class="col-lg-8 col-12 d-flex align-items-stretch">
					<div id="calendar" class="w-100" style="background-color: #f4f6f9; max-height: 720px; overflow: auto;"></div>
				</div>
			</div>
<br>
			<div class="col">
				<h3>Sick Employees</h3>
				<table class="table-list table table-striped table-bordered text-center" id="myTable">
					<thead style="background-color:black;" class="text-white">
						<tr>
							<th>
								Employee ID
							</th>
							<th>
								Illness
							</th>
							<th>
								Last Name
							</th>
							<th>
								First Name
							</th>
							<th>
								Middle Name
							</th>
							<th>
								Address
							</th>
							<th>
								Contact
							</th>
							<th>
								Date Declared
							</th>
							<th>
								Option
							</th>

						</tr>
					</thead>

					<?php foreach ($sicks as $sicks) : ?>
						<tbody>
							<tr>
								<td>
									<?= $sicks->emp_id ?>
								</td>
								<td>
									<?= $sicks->ill_name ?>
								</td>
								<td>
									<?= $sicks->lname ?>
								</td>

								<td>
									<?= $sicks->fname ?>
								</td>

								<td>
									<?= $sicks->mname ?>
								</td>
								<td>
									<?= $sicks->address ?>
								</td>

								<td>
									<?= $sicks->contact ?>
								</td>
								<td>
									<?= $sicks->date_declared ?>
								</td>
								<td>
									<a href="<?= site_url('health/cure/' . $sicks->health_id) ?>"><img
											src="<?= base_url('assets/images/delete.png') ?>" style="width:15px;" alt="delete"></a>

								</td>
							</tr>
						</tbody>
					<?php endforeach ?>
				</table>
			</div>
		</div>
	</section>

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
</div>
