<div class="content-wrapper" style="padding: 40px 20px;">
	<!-- Content Header (Page header) -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
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
									<button class="btn btn-success" data-toggle="modal" data-target="#BackdropHealth" id="schedule-appointment" style="margin-top: 20px;">
										<i class="fas fa-calendar-plus"></i> Schedule an Appointment
									</button>
								</div>
							</div>
						</div>
						<div class="icon">
							<i class="fas fa-user-circle"></i>
						</div>
						<a href="#" class="small-box-footer" style="opacity: 0;">View Profile <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>

			<!-- Appointment Dashboard -->
			<div class="row">
				<!-- Upcoming Appointments (Today + Week) -->
				<div class="col-lg-3 col-6">
					<div class="small-box bg-primary">
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

				<div class="col-lg-3 col-6">
					<div class="small-box bg-primary">
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

				<!-- Completed Appointments -->
				<div class="col-lg-3 col-6">
					<div class="small-box bg-success">
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

				<!-- Canceled Appointments -->
				<div class="col-lg-3 col-6">
					<div class="small-box bg-danger">
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

			<!-- Calendar Row -->
			<div class="row">
				<div class="col-lg-12">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</section>
</div>
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
				fetch(devURL + '/../api/schedule')
					.then(response => response.json())
					.then(data => {
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
