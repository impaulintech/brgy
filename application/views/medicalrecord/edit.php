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
        <form action="<?=site_url('medicalrecord/edit')?>" method="post">
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
                                <a href="<?=site_url('medicalrecord')?>"><button type="button" class="close"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('medicalrecord/edit')?>" method="post">
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

                                        <label for="FullName">FullName :</label>
                                        <input type="text" class="form-control" placeholder="FullName" id="FullName"
                                            name="FullName" value="<?= $medicalrecord->FullName ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Address">Address :</label>
                                        <input type="text" class="form-control" placeholder="Address" id="Address"
                                            name="Address" value="<?= $medicalrecord->Address ?>">
                                    </div>
                                    <div class="col">

                                        <label for="Religion">Religion :</label>
                                        <input type="text" class="form-control" placeholder="Religion" id="Religion"
                                            name="Religion" value="<?= $medicalrecord->Religion ?>" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="Birthdate">Birthdate :</label>
                                        <input type="text" class="form-control" placeholder="Birthdate " id="Birthdate"
                                            name="Birthdate" value="<?= $medicalrecord->Birthdate ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Age">Age :</label>
                                        <input type="text" class="form-control" placeholder="Age" id="Age"
                                            name="Age" value="<?= $medicalrecord->Age ?>" required="">
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="Sex">Sex :</label>
                                    <input type="text" class="form-control" placeholder="Sex" id="Sex"
                                    name="Sex" value="<?= $medicalrecord->Sex ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="No_number">No_number :</label>
                                    <input type="text" class="form-control" placeholder="No_number" id="No_number"
                                    name="No_number" value="<?= $medicalrecord->No_number ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Illness">Illness :</label>
                                    <input type="text" class="form-control" placeholder="Illness" id="Illness"
                                    name="Illness" value="<?= $medicalrecord->Illness ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Description">Description :</label>
                                    <input type="text" class="form-control" placeholder="Description" id="Description"
                                    name="Description" value="<?= $medicalrecord->Description ?>" required="">
                                </div>

                                <input type="hidden" name="id" value="<?= $medicalrecord->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('medicalrecord')?>"><button type="button"
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