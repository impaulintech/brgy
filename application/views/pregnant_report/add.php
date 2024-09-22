<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <title>Add</title>
</head>

<body>

    <form action="<?= site_url('checkup_report/add')?>" method="post">
    <div class="container-fluid">
    <div class="container">

        <h1>Add New checkup_report</h1>

        <?php if(validation_errors())
    {
        echo validation_errors();
    }
    ?>




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
             <br>
    <label for="FullName">FullName: </label>
    <input type="text" id="FullName" name= "FullName" value="">
</br>
<br>
    <label for="Date">Date: </label>
    <input type="Date" id="Date" name= "Date" value="">
</br>
<br>
    <label for="Symptoms">LastName: </label>
    <input type="text" id="Symptoms" name= "Symptoms" value="">
</br>
<br>
    <label for="Age">Age: </label>
    <input type="text" id="Age" name= "Age" value="">
</br>
<br>
    <label for="Sex">Sex: </label>
    <input type="text" id="Sex" name= "Sex" value="">
</br>
<br>
    <label for="Diagnosis">Diagnosis: </label>
    <input type="text" id="Diagnosis" name= "Diagnosis" value="">
</br>
<br>
    <label for="MedicationsPrescribed">MedicationsPrescribed: </label>
    <input type="text" id="MedicationsPrescribed" name= "MedicationsPrescribed" value="">
</br>
<br>
    <label for="AdditionalNotes">AdditionalNotes: </label>
    <input type="text" id="AdditionalNotes" name= "AdditionalNotes" value="">
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