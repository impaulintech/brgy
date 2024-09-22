<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <title>Add</title>
</head>

<body>

    <form action="<?= site_url('doctorinfo/add')?>" method="post">
    <div class="container-fluid">
    <div class="container">

        <h1>Add New Doctorinfo</h1>

        <?php if(validation_errors())
    {
        echo validation_errors();
    }
    ?>




        <label for="Specialization">Select Specialization :</label>
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
             <br>
    <label for="FirstName">FirstName: </label>
    <input type="text" id="FirstName" name= "FirstName" value="">
</br>
<br>
    <label for="MiddleName">MiddleName: </label>
    <input type="text" id="MiddleName" name= "MiddleName" value="">
</br>
<br>
    <label for="LastName">LastName: </label>
    <input type="text" id="LastName" name= "LastName" value="">
</br>
<br>
    <label for="ContactNum">ContactNum: </label>
    <input type="text" id="ContactNum" name= "ContactNum" value="">
</br>
<br>
    <label for="Email">Email: </label>
    <input type="text" id="Email" name= "Email" value="">
</br>
<br>
    <label for="Address">Address: </label>
    <input type="text" id="Address" name= "Address" value="">
</br>
<br>
    <input type="submit" value="Register">
</br>
<script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

</body>
</form>

</html>