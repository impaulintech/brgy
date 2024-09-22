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
        <form action="<?=site_url('doctorinfo/edit')?>" method="post">
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
                                <a href="<?=site_url('doctorinfo')?>"><button type="button" class="close"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </a>
                            </div>
                        </div>

                        <div class="modal-body">
                            <form action="<?=site_url('doctorinfo/edit')?>" method="post">
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
                                            name="FirstName" value="<?= $doctorinfo->FirstName ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="MiddleName">MiddleName :</label>
                                        <input type="text" class="form-control" placeholder="MiddleName" id="MiddleName"
                                            name="MiddleName" value="<?= $doctorinfo->MiddleName ?>">
                                    </div>
                                    <div class="col">

                                        <label for="LastName">LastName :</label>
                                        <input type="text" class="form-control" placeholder="LastName" id="LastName"
                                            name="LastName" value="<?= $doctorinfo->LastName ?>" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="ContactNum">Mobile number :</label>
                                        <input type="text" class="form-control" placeholder="ContactNum " id="ContactNum"
                                            name="ContactNum" value="<?= $doctorinfo->ContactNum ?>" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Specialization">Select Specialization :</label>
                                     <select class="form-control" name="Specialization" id="Specialization" value="<?= $doctorinfo->Dateofbirth ?>" required="">
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

                                    <label for="Email">Email :</label>
                                    <input type="text" class="form-control" placeholder="Email" id="addrEmailess"
                                        name="Email" value="<?= $doctorinfo->Email ?>" required="">
                                </div>
                                <div class="col">
                                    <label for="Address">Address :</label>
                                    <input type="text" class="form-control" placeholder="Address" id="Address"
                                    name="Address" value="<?= $doctorinfo->Address ?>" required="">
                                </div>

                                <input type="hidden" name="id" value="<?= $doctorinfo->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('doctorinfo')?>"><button type="button"
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