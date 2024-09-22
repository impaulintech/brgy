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
    table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  text-align: center;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: black;
  color: white;
}
</style>

<div>
    <h1 style="text-align: center;">Initial Record</h1>
</div>
  <div class="container">
     <table class="table-list table table-striped  text-center" id="">
         <thead style="background-color:black;" class="text-white">
             <tr>
                 <th>
                     Patient_id
                 </th>
                 <th>
                     FullName
                 </th>
                 <!-- <th>
                     MiddleName
                 </th>
                 <th>
                     LastName
                 </th>
                 <th>
                    ContactNum
                 </th>
                 <th>
                     Email
                 </th>
                 <th>
                     Specialization
                 </th>
                 <th>
                     Address
                 </th> -->
                 <th>
                     Option
                 </th>

             </tr>
         </thead>

         <?php foreach($initialrecord as $initialrecord) : ?>
         <tbody>
             <tr>
                 <td>
                     <?= $initialrecord->id ?>
                 </td>
                 <td>
                     <?= $initialrecord->FullName ?>
                 </td>
                 <!-- <td>
                     <?= $doctorinfo->MiddleName ?>
                 </td>
                 <td>
                     <?= $doctorinfo->LastName ?>
                 </td>

                 <td>
                     <?= $doctorinfo->ContactNum ?>
                 </td>

                 <td>
                     <?= $doctorinfo->Email ?>
                 </td>
                 <td>
                     <?= $doctorinfo->Specialization ?>
                 </td>
                 <td>
                     <?= $doctorinfo->Address ?>
                 </td> -->
                 <td>
                     <a href="<?= site_url('initialrecord/view/'. $initialrecord->id) ?>"><button type="button" class="btn btn-primary">view</button></a>
                     <a href="<?= site_url('initialrecord/delete/'. $initialrecord->id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>

                 </td>
             </tr>
         </tbody>
         <?php endforeach ?>
     </table>

<!-- <a href="<?= site_url('doctorinfo/add') ?>" class="btn btn-light btn-lg active mt-3" role="button" aria-pressed="true">Add New doctorinfo</a> -->


    <!-- <script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script> -->

</body>
</html>

     <!-- -------------------------------------------------- modal Add ------------------------------------>
     <button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
         Add New
     </button>
<div class="container">
<!-- <a href="<?= site_url('initialrecord/add') ?>" class="btn btn-light btn-lg active mt-3" role="button" aria-pressed="true">Add New Nurseinfo</a> -->
        <!-- <form action="<?=site_url('initialrecord/add')?>" method="post"> -->
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
                                <!-- <a href="<?=site_url('initialrecord')?>"> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <!-- </a> -->
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('initialrecord/add')?>" method="post">
                                
                                <div class="row">
                                    <div class="col">

                                        <label for="FullName">FullName :</label>
                                        <input type="text" class="form-control" placeholder="FullName" id="FullName"
                                            name="FullName" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Weight">Weight :</label>
                                        <input type="text" class="form-control" placeholder="Weight" id="Weight"
                                            name="Weight" value="">
                                    </div>
                                    <div class="col">

                                        <label for="Height">Height :</label>
                                        <input type="text" class="form-control" placeholder="Height" id="Height"
                                            name="Height" value="" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="Bloodpressure">Bloodpressure:</label>
                                        <input type="text" class="form-control" placeholder="Bloodpressure " id="Bloodpressure"
                                            name="Bloodpressure" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Bloodtype">Bloodtype:</label>
                                        <input type="text" class="form-control" placeholder="Bloodtype " id="Bloodtype"
                                            name="Bloodtype" value="" required="">
                                    </div>
                                    <div class="col">

                                        <!-- <label for="Specialization">Select Specialization :</label>
                                          <select class="form-control" name="Specialization" id="Specialization" required="">
                                                  <option>Select Specialization</option>
                                                  <option value="Oncology">Oncology</option>
                                                  <option value="Neurology">Neurology</option>
                                                  <option value="Hematology">Hematology</option>
                                                  <option value="Cardiology">Cardiology</option>
                                                  <option value="Dermatology">Dermatology</option>
                                                  <option value="Endocrinology">Endocrinology</option>
                                                  <option value="Gastroenterology">Gastroenterology</option>
                                         </select>
                                    </div>
                                </div>

                                <div class="col">

                                    <label for="Address">Address :</label>
                                    <input type="text" class="form-control" placeholder="Address" id="Address"
                                        name="Address" value="" required="">
                                </div> -->

                                <!-- <input type="hidden" name="id" value="<?= $initialrecord->id ?>"> -->
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('initialrecord')?>"><button type="button"
                                    class="btn btn-secondary">Close</button></a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </div>
                </div>
        </form>
