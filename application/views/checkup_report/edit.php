<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.css')?>">
</head>
<body>
    <div class="content-wrapper">
        <form action="<?=site_url('checkup_report/edit')?>" method="post">
            <div class="modal fade" id="BackdropEdit" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <div class="col-lg-4">

                            </div>
                            <div class="col-lg-4">
                                <h5 class="modal-title col-12 text-center" id="staticBackdropLabel">Update
                                </h5>
                            </div>
                            <div class="col-lg-4">
                                <a href="<?=site_url('checkup_report')?>"><button type="button" class="close"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('checkup_report/edit')?>" method="post">
                               
                                <div class="row">
                                    <div class="col">

                                        <label for="FullName">FullName :</label>
                                        <input type="text" class="form-control" placeholder="FullName" id="FullName"
                                            name="FullName" value="<?= $checkup_report->FullName ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Date">Date :</label>
                                        <input type="Date" class="form-control" placeholder="Date" id="Date"
                                            name="Date" value="<?= $checkup_report->Date ?>">
                                    </div>
                                    <div class="col">

                                        <label for="Symptoms">Symptoms :</label>
                                        <input type="text" class="form-control" placeholder="Symptoms" id="Symptoms"
                                            name="Symptoms" value="<?= $checkup_report->Symptoms ?>" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="Age">Age :</label>
                                        <input type="text" class="form-control" placeholder="Age " id="Age"
                                            name="Age" value="<?= $checkup_report->Age ?>" required="">
                                    </div>
                                    <div class="col">

                                        <!-- <label for="Specialization">Select Specialization :</label>
                                     <select class="form-control" name="Specialization" id="Specialization" value="<?= $doctorinfo->Dateofbirth ?>" required="">
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

                                    <label for="Sex">Sex :</label>
                                    <input type="text" class="form-control" placeholder="Sex" id="Sex"
                                        name="Sex" value="<?= $checkup_report->Sex ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Diagnosis">Diagnosis :</label>
                                    <input type="text" class="form-control" placeholder="Diagnosis" id="Diagnosis"
                                    name="Diagnosis" value="<?= $checkup_report->Diagnosis ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="MedicationsPrescribed">MedicationsPrescribed :</label>
                                    <input type="text" class="form-control" placeholder="MedicationsPrescribed" id="MedicationsPrescribed"
                                    name="MedicationsPrescribed" value="<?= $checkup_report->MedicationsPrescribed ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="AdditionalNotes">AdditionalNotes :</label>
                                    <input type="text" class="form-control" placeholder="AdditionalNotes" id="AdditionalNotes"
                                    name="AdditionalNotes" value="<?= $checkup_report->AdditionalNotes ?>" required="">
                                </div>

                                <input type="hidden" name="id" value="<?= $checkup_report->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('checkup_report')?>"><button type="button"
                                    class="btn btn-secondary">Close</button></a>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </div>
                </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/js/popper.js')?>"></script>

        <script>
        $(document).ready(function() {
            $("#BackdropEdit").modal('show');
        });
        </script>
</body>

</html>