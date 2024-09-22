<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"> -->
	<title>checkuprecord</title>
</head>

<body>

	<style>
		table,
		th,
		td {
			/* border:1px solid black;
  border-collapse: collapse;
  height: 70px; */
			/* margin-left: 100px; */

		}

		/* .container{
 margin-left: 300px;
 padding: 20px;
}
button{
    margin-left: 100px;
} */

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
		<h1 style="text-align: center;">Checkup Report</h1>
	</div>

	<div class="container ">
		<table class="table table-bordered   mt-4">
			<table class="table-list table table-striped  text-center" id="">
				<thead class="">
					<tr>
						<th>
							Patient_id
						</th>
						<th>
							FirstName
						</th>
						<th>
							Middle_Initial
						</th>
						<th>
							LastName
						</th>
						<!-- <th>
                     Age
                 </th>
                 <th>
                     Sex
                 </th>
                 <th>
                     Address
                 </th>
                 <th>
                     Illness
                 </th>
                 <th>
                     Check up date
                 </th> -->
						<th>
							Option
						</th>

					</tr>
				</thead>

				<?php foreach ($checkup_record as $checkup_record) : ?>
					<tbody>
						<tr>
							<td>
								<?= $checkup_record->id ?>
							</td>
							<td>
								<?= $checkup_record->FirstName ?>
							</td>
							<td>
								<?= $checkup_record->Middle_Initial ?>
							</td>
							<td>
								<?= $checkup_record->LastName ?>
							</td>

							<!-- <td>
                     <?= $checkup_record->Age ?>
                 </td>

                 <td>
                     <?= $checkup_record->Sex ?>
                 </td>
                 <td>
                     <?= $checkup_record->Address ?>
                 </td>

                 <td>
                     <?= $checkup_record->Illness ?>
                 </td>
                 <td>
                     <?= $checkup_record->Dateofcheckup ?>
                 </td> -->
							<td>
								<!-- <a href="<?= site_url('checkup_record/show/' . $checkup_record->id) ?>"><img
                             src="<?= base_url('assets/images/edit.png') ?>" style="width:15px;" alt="edit"></a> -->
								<a href="<?= site_url('checkup_record/view/' . $checkup_record->id) ?>"><button type="button" class="btn btn-primary">view</button></a>
								<a href="<?= site_url('checkup_record/delete/' . $checkup_record->id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>

							</td>
						</tr>
					</tbody>

				<?php endforeach ?>

			</table>
			<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
				Add New
			</button>



</body>

</html>

<!-- -------------------------------------------------- modal Add ------------------------------------>
<!---------------------------------------------------- modal Add ------------------------------------>


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
						<!-- <a href="<?= site_url('checkup_record') ?>"> -->
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<!-- </a> -->
					</div>
				</div>

				<div class="modal-body">
					<form action="<?= site_url('checkup_record/add') ?>" method="post">

						<div class="row">
							<div class="col">

								<label for="FirstName">FirstName :</label>
								<input type="text" class="form-control" placeholder="FirstName" id="FirstName"
									name="FirstName" value="" required="">
							</div>
							<div class="col">

								<label for="Middle_Initial">Middle_Initial :</label>
								<input type="text" class="form-control" placeholder="Middle_Initial" id="Middle_Initial"
									name="Middle_Initial" value="">
							</div>
							<div class="col">

								<label for="LastName">LastName :</label>
								<input type="text" class="form-control" placeholder="LastName" id="LastName"
									name="LastName" value="" required="">
							</div>
						</div>
						<div class="row">
							<div class="col">

								<label for="Age">Age:</label>
								<input type="text" class="form-control" placeholder="Age " id="Age"
									name="Age" value="" required="">
							</div>
							<div class="col">

								<label for="Sex">Sex :</label>
								<input type="text" class="form-control" placeholder="Sex" id="Sex"
									name="Sex" value="" required="">
							</div>
						</div>

						<div class="col">

							<label for="Address">Address :</label>
							<input type="text" class="form-control" placeholder="Address" id="Address"
								name="Address" value="" required="">
						</div>
						<div class="col">
							<label for="Illness">Illness :</label>
							<input type="text" class="form-control" placeholder="Illness" id="Illness"
								name="Illness" value="" required="">
						</div>
						<div class="col">
							<label for="Dateofcheckup">Dateofcheckup :</label>
							<input type="date" class="form-control" placeholder="Dateofcheckup" id="Dateofcheckup"
								name="Dateofcheckup" value="" required="">
						</div>

						<!-- <input type="hidden" name="id" value="<?= $checkup_record->id ?>"> -->
				</div>

				<div class="modal-footer">
					<a href="<?= site_url('checkup_record') ?>"><button type="button"
							class="btn btn-secondary">Close</button></a>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>

			</div>
		</div>
		</form>
