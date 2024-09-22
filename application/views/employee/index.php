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
    <h1 style="text-align: center;">Barangay Employee</h1>
</div>

 <div class="container">
     <table class="table-list table table-striped  text-center" id="">
         <thead style="background-color:black;" class="text-white">
             <tr>
                 <th>
                     Employee ID
                 </th>
                 <!-- <th>
                     Role ID
                 </th> -->
                 <th>
                     Last Name
                 </th>
                 <th>
                     First Name
                 </th>
                 <th>
                     Middle Name
                 </th>
                 <!-- <th>
                     Address
                 </th>
                 <th>
                     Contact
                 </th>
                 <th>
                     Email
                 </th> -->
                 <th>
                     Option
                 </th>

             </tr>
         </thead>

         <?php foreach($employee as $employee) : ?>
         <tbody>
             <tr>
                 <td>
                     <?= $employee->emp_id ?>
                 </td>
                 <!-- <td>
                     <?= $employee->role_id ?>
                 </td> -->
                 <td>
                     <?= $employee->lname ?>
                 </td>

                 <td>
                     <?= $employee->fname ?>
                 </td>

                 <td>
                     <?= $employee->mname ?>
                 </td>
                 <!-- <td>
                     <?= $employee->address ?>
                 </td>

                 <td>
                     <?= $employee->contact ?>
                 </td>
                 <td>
                     <?= $employee->email ?>
                 </td> -->
                 <td>
                     <a href="<?= site_url('employee/view/'. $employee->emp_id) ?>"><button type="button" class="btn btn-primary">view</button></a>
                     <a href="<?= site_url('employee/delete/'. $employee->emp_id) ?>"><button type="button" class="btn btn-danger">Delete</button></a>

                 </td>
             </tr>
         </tbody>
         <?php endforeach ?>
     </table>
     <!---------------------------------------------------- modal Add ------------------------------------>
     <button type="button" class="btn btn-dark btn-lg btn-block" data-toggle="modal" data-target="#BackdropAdd">
         Add New
     </button>

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
                 <form action="<?=site_url('employee/add')?>" method="post">
                     <div class="modal-body">
                         <!-- <label for="role_id">Select Role :</label>
                         <select class="form-control" name="role_id" id="role_id" required="">
                             <option>Select Role</option>
                             <option value="4">IT Admin</option>
                             <option value="3">Admin</option>
                             <option value="2">HR</option>
                             <option value="1">Employee</option>
                         </select> -->

                         <div class="row">
                             <div class="col">

                                 <label for="fname">First Name :</label>
                                 <input type="text" class="form-control" placeholder="First name" id="fname"
                                     name="fname" value="" required="">
                             </div>
                             <div class="col">

                                 <label for="mname">Middle Name :</label>
                                 <input type="text" class="form-control" placeholder="Middle name" id="mname"
                                     name="mname" value="">
                             </div>
                             <div class="col">

                                 <label for="lname">Last Name :</label>
                                 <input type="text" class="form-control" placeholder="Last name" id="lname" name="lname"
                                     value="" required="">
                             </div>
                         </div>
                        <div class="row">
                         <div class="col">

                             <label for="contact">Mobile number :</label>
                             <input type="text" class="form-control" placeholder="Mobile Number" id="contact"
                                 name="contact" value="" required="">
                         </div>
                         <div class="col">

                             <label for="email">Email :</label>
                             <input type="text" class="form-control" placeholder="email" id="email"
                                 name="email" value="" required="">
                         </div>

                         </div>
                         <div class="col">

                             <label for="address">Address :</label>
                             <input type="text" class="form-control" placeholder="Address" id="address" name="address"
                                 value="" required="">
                         </div>
                     </div>


                     <div class="modal-footer">
                     <a href="<?=site_url('doctorinfo')?>"><button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button></a>
                         <button type="submit" class="btn btn-primary">Add</button>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </div>

 <div class="col-12 col-lg-2">

 </div>
