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
    .container{
 margin-left: 450px;
 padding: 20px;
}
button{
    margin-left: 1px;
}
</style>

  <div class="container">
     <table class="table-list table table-striped table-bordered text-center" id="">
         <thead style="background-color:black;" class="text-white">
             <tr>
                 <th>
                     Report_id
                 </th>
                 <th>
                     FullName
                 </th>
                 <!-- <th>
                     MiddleName
                 </th> -->
                 <!-- <th>
                 Date
                 </th> -->
                 <!-- <th>
                    ContactNum
                 </th>
                 <th>
                     Email
                 </th> -->
                 <!-- <th>
                 Symptoms
                 </th>
                 <th>
                 Age
                 </th>
                 <th>
                 Sex
                 </th>
                 <th>
                 Diagnosis
                 </th>
                 <th>
                 MedicationsPrescribed
                 </th>
                 <th>
                 AdditionalNotes
                 </th> -->
                 <!-- <th>
                     Address
                 </th> -->
                 <th>
                     Option
                 </th>

             </tr>
         </thead>

         <?php foreach($checkup_report as $checkup_report) : ?>
         <tbody>
             <tr>
                 <td>
                     <?= $checkup_report->id ?>
                 </td>
                 <td >
                     <?= $checkup_report->FullName ?>
                 </td>
                 <!-- <td>
                     <?= $checkup_report->Date ?>
                 </td>
                 <td>
                     <?= $checkup_report->Symptoms ?>
                 </td>

                 <td>
                     <?= $checkup_report->Age ?>
                 </td>

                 <td>
                     <?= $checkup_report->Sex ?>
                 </td>
                 <td>
                     <?= $checkup_report->Diagnosis ?>
                 </td>
                 <td>
                     <?= $checkup_report->MedicationsPrescribed ?>
                 </td>
                 <td>
                     <?= $checkup_report->AdditionalNotes ?>
                 </td> -->
                 <td>
                     <a href="<?= site_url('checkup_report/view/'. $checkup_report->id) ?>"><img
                             src="<?=base_url('assets/images/eye.png')?>" style="width:15px;" alt="view"></a>
                     <a href="<?= site_url('checkup_report/delete/'. $checkup_report->id) ?>"><img
                             src="<?=base_url('assets/images/delete.png')?>" style="width:15px;" alt="delete"></a>

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
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#BackdropAdd">
         Add New
     </button>
<div class="container">
<!-- <a href="<?= site_url('doctorinfo/add') ?>" class="btn btn-light btn-lg active mt-3" role="button" aria-pressed="true">Add New Nurseinfo</a> -->
        <!-- <form action="<?=site_url('doctorinfo/add')?>" method="post"> -->
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
                                <!-- <a href="<?=site_url('checkup_report')?>"> -->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                <!-- </a> -->
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('checkup_report/add')?>" method="post">
                                
                                <div class="row">
                                    <div class="col">

                                        <label for="FullName">FullName :</label>
                                        <input type="text" class="form-control" placeholder="FullName" id="FullName"
                                            name="FullName" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Date">Date :</label>
                                        <input type="Date" class="form-control" placeholder="Date" id="Date"
                                            name="Date" value="">
                                    </div>
                                    <div class="col ">

                                        <label for="Symptoms">Symptoms :</label>
                                        <input type="text" class="form-control" placeholder="Symptoms" id="Symptoms"
                                            name="Symptoms" value="" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="Age">Age:</label>
                                        <input type="text" class="form-control" placeholder="Age " id="Age"
                                            name="Age" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Sex">Sex:</label>
                                        <input type="text" class="form-control" placeholder="Sex " id="Sex"
                                            name="Sex" value="" required="">
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
                                         </select> -->
                                    </div>
                                </div>

                                <div class="col">

                                    <label for="Diagnosis">Diagnosis :</label>
                                    <input type="text" class="form-control" placeholder="Diagnosis" id="Diagnosis"
                                        name="Diagnosis" value="" required="">
                                </div>

                                <div class="col">

                                    <label for="MedicationsPrescribed">MedicationsPrescribed :</label>
                                    <input type="text" class="form-control" placeholder="MedicationsPrescribed" id="MedicationsPrescribed"
                                        name="MedicationsPrescribed" value="" required="">
                                </div>

                                <div class="col">

                                    <label for="AdditionalNotes">AdditionalNotes :</label>
                                    <input type="text" class="form-control" placeholder="AdditionalNotes" id="AdditionalNotes"
                                        name="AdditionalNotes" value="" required="">
                                </div>


                                <input type="hidden" name="id" value="<?= $checkup_report->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('checkup_report')?>"><button type="button"
                                    class="btn btn-secondary">Close</button></a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </div>
                </div>
        </form>
