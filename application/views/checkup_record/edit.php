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
        <form action="<?=site_url('checkup_record/edit')?>" method="post">
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
                                <a href="<?=site_url('checkup_record')?>"><button type="button" class="close"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('checkup_record/edit')?>" method="post">
                                <!-- <label for="role_id">Select Role :</label>
                                <select class="form-control" name="role_id" id="role_id" required="">
                                    <option value="<?= $employee->role_id ?>">Select Role</option>
                                    <option value="4">IT Admin</option>
                                    <option value="3">Admin</option>
                                    <option value="2">HR</option>
                                    <option value="1">Employee</option>
                                </select> -->
                                <div class="row">
                                    <div class="col">

                                        <label for="FirstName">FirstName :</label>
                                        <input type="text" class="form-control" placeholder="FirstName" id="FirstName"
                                            name="FirstName" value="<?= $checkup_record->FirstName ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Middle_Initial">Middle_Initial :</label>
                                        <input type="text" class="form-control" placeholder="Middle_Initial" id="Middle_Initial"
                                            name="Middle_Initial" value="<?= $checkup_record->Middle_Initial ?>">
                                    </div>
                                    <div class="col">

                                        <label for="LastName">LastName :</label>
                                        <input type="text" class="form-control" placeholder="LastName" id="LastName"
                                            name="LastName" value="<?= $checkup_record->LastName ?>" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="Age">Age :</label>
                                        <input type="text" class="form-control" placeholder="Age " id="Age"
                                            name="Age" value="<?= $checkup_record->Age ?>" required="">
                                    </div>
                                    <div class="col">

                                        <!-- <label for="Specialization">Select Specialization :</label>
                                     <select class="form-control" name="Specialization" id="Specialization" value="<?= $checkup_record->Dateofbirth ?>" required="">
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
                                        name="Sex" value="<?= $checkup_record->Sex ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Address">Address :</label>
                                    <input type="text" class="form-control" placeholder="Address" id="Address"
                                    name="Address" value="<?= $checkup_record->Address ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Illness">Illness :</label>
                                    <input type="text" class="form-control" placeholder="Illness" id="Illness"
                                    name="Illness" value="<?= $checkup_record->Illness ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Dateofcheckup">Dateofcheckup :</label>
                                    <input type="date" class="form-control" placeholder="Dateofcheckup" id="Dateofcheckup"
                                    name="Dateofcheckup" value="<?= $checkup_record->Dateofcheckup ?>" required="">
                                </div>

                                <input type="hidden" name="id" value="<?= $checkup_record->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('checkup_record')?>"><button type="button"
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