<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>

<body class="hold-transition sidebar-mini sidebar-collapse">
	<!-- Site wrapper -->

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
		<!-- Brand -->
		<h3 class="navbar-brand py-3">EMPLOYEE HEALTH MONITORING</h3>
		</hr>
		<!-- Toggler/collapsibe Button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>

		<!-- Navbar links -->
		<div class="nav-bar collapse navbar-collapse d-lg-block" id="collapsibleNavbar">
			<ul class="navbar-nav d-lg-none">
				<li class="nav-item">
					<a href="<?= base_url('dashboard') ?>" class="nav-link text-white">Dasboard</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('HR_management') ?>" class="nav-link text-white">User</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('Employee') ?>" class="nav-link text-white">Employee</a>
				</li>
				<li class="nav-item">
					<a href="#" data-toggle="modal" data-target="#BackdropHealth" class="nav-link d-lg-none d-md-block text-white">Health
						Form</a>
				</li>
				<li class="nav-item">
					<a href="<?= site_url('login/logout') ?>" class="nav-link d-lg-none d-md-block text-white">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="wrapper">
		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<!-- Brand Logo -->

			<!-- Sidebar -->
			<div class="sidebar">
				<!-- Sidebar user (optional) -->
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('assets/images/Prof.jpg') ?>" class="img-circle elevation-2"
							alt="User Image">
					</div>
					<div class="info">
						<a href="#" data-toggle="modal" data-target="#BackdropProfile"
							class="d-block"><span><?php echo $this->load->session->userdata('fname'); ?></span>
							<span><?php echo $this->load->session->userdata('lname'); ?></span></a>
					</div>
				</div>


				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
						data-accordion="false">

						<li class="nav-item">
							<a href="<?= site_url('dashboard') ?>" class="nav-link">
								<i class="nav-icon fa-solid fa-table-columns"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="#" data-toggle="modal" data-target="#BackdropHealth" class="nav-link">
								<i class="nav-icon fa-solid fa-calendar"></i>
								<p>
									Schedule Appointment
								</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= site_url('login/logout') ?>" class="nav-link">
								<i class="nav-icon fa-solid fa-right-from-bracket"></i>
								<p>
									Logout
								</p>
							</a>
						</li>


					</ul>
				</nav>
				<!-- /.sidebar-menu -->
			</div>
			<!-- /.sidebar -->
		</aside>

		<!-- modal -->
		<!-- modal -->
		<!-- modal -->
		<div class="modal fade" id="BackdropHealth" data-backdrop="static" data-keyboard="false" tabindex="-1"
			aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<div class="col-lg-4">

						</div>
						<div class="col-lg-4">
							<h5 class="modal-title col-12 text-center" id="staticBackdropLabel">Schedule an appointment
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
						</div>


						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
