<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>"> -->
    <title>nurseinfo</title>
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
    <h1 style="text-align: center;">Nurse Info</h1>
</div>

  <div class="container">
  <table class="table table-bordered   mt-4">
     <table class="table-list table table-striped  text-center" id="">
         <thead >
             <tr>
                 <th>
                     Nurse_id
                 </th>
                 <th>
                     FirstName
                 </th>
                 <th>
                     MiddleName
                 </th>
                 <th>
                     LastName
                 </th>
                 <!-- <th>
                    ContactNum
                 </th>
                 <th>
                    Birthdate
                 </th>
                 <th>
                     Email
                 </th>
                 <th>
                     Address
                 </th> -->
                 <th>
                     Option
                 </th>

             </tr>
         </thead>

         <?php foreach($nurseinfo as $nurseinfo) : ?>
         <tbody>
             <tr>
                 <td>
                     <?= $nurseinfo->id ?>
                 </td>
                 <td>
                     <?= $nurseinfo->FirstName ?>
                 </td>
                 <td>
                     <?= $nurseinfo->MiddleName ?>
                 </td>
                 <td>
                     <?= $nurseinfo->LastName ?>
                 </td>

                 <!-- <td>
                     <?= $nurseinfo->ContactNum ?>
                 </td>

                 <td>
                     <?= $nurseinfo->Dateofbirth ?>
                 </td>

                 <td>
                     <?= $nurseinfo->Email ?>
                 </td>
                
                 <td>
                     <?= $nurseinfo->Address ?>
                 </td> -->
                 <td>
                     <a href="<?= site_url('nurseinfo/view/'. $nurseinfo->id) ?>"><button type="button" class="btn btn-primary">view</button></a>
                     <a href="<?= site_url('nurseinfo/delete/'. $nurseinfo->id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>

                 </td>
             </tr>
         </tbody>
         <?php endforeach ?>
     </table>


<!---------------------------------------------------- modal Add ------------------------------------>
<button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
         Add New
     </button>
     
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

                        <div class="modal-body">
                            <form action="<?=site_url('nurseinfo/add')?>" method="post">
                                
                                <div class="row">
                                    <div class="col">

                                        <label for="FirstName">FirstName :</label>
                                        <input type="text" class="form-control" placeholder="FirstName" id="FirstName"
                                            name="FirstName" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="MiddleName">MiddleName :</label>
                                        <input type="text" class="form-control" placeholder="MiddleName" id="MiddleName"
                                            name="MiddleName" value="">
                                    </div>
                                    <div class="col">

                                        <label for="LastName">LastName :</label>
                                        <input type="text" class="form-control" placeholder="LastName" id="LastName"
                                            name="LastName" value="" required="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">

                                        <label for="ContactNum">Mobile number :</label>
                                        <input type="text" class="form-control" placeholder="ContactNum " id="ContactNum"
                                            name="ContactNum" value="" required="">
                                    </div>
                                    <div class="col">

                                        <label for="Dateofbirth">Dateofbirth :</label>
                                        <input type="date" class="form-control" placeholder="Dateofbirth" id="Dateofbirth"
                                            name="Dateofbirth" value="" required="">
                                    </div>
                                </div>

                                <div class="col">

                                    <label for="Email">Email :</label>
                                    <input type="text" class="form-control" placeholder="Email" id="addrEmailess"
                                        name="Email" value="" required="">
                                </div>
                                <div class="col">
                                    <label for="Address">Address :</label>
                                    <input type="text" class="form-control" placeholder="Address" id="Address"
                                    name="Address" value="" required="">
                                </div>

                                <input type="hidden" name="id" value="<?= $nurseinfo->id ?>">
                        </div>

                        <div class="modal-footer">
                            <a href="<?=site_url('nurseinfo')?>"><button type="button"
                                    class="btn btn-secondary">Close</button></a>
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </div>
                </div>
        </form>

        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
        <script src="<?=base_url('assets/js/popper.js')?>"></script>

        <!-- <script>
        $(document).ready(function() {
            $("#BackdropAdd").modal('show');
        });
        </script> -->

 

</body>
</html>

    
