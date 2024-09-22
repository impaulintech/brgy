<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <title>Add </title>
</head>

<body>

    <form action="<?= site_url('medicalrecord/add')?>" method="post">
    <div class="container-fluid">
    <div class="container">

        <h1>Add New medicalrecord</h1>

        <?php if(validation_errors())
    {
        echo validation_errors();
    }
    ?>




        
             <br>
    <label for="FullName">FullName: </label>
    <input type="text" id="FullName" name= "FullName" value="">
</br>
<br>
    <label for="Address">Address: </label>
    <input type="text" id="Address" name= "Address" value="">
</br>
<br>
    <label for="Religion">Religion: </label>
    <input type="text" id="Religion" name= "Religion" value="">
</br>
<br>
    <label for="Birthdate">Birthdate: </label>
    <input type="date" id="Birthdate" name= "Birthdate" value="">
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
    <label for="No_number">No_number: </label>
    <input type="text" id="No_number" name= "No_number" value="">
</br>
<br>
    <label for="Illness">Illness: </label>
    <input type="text" id="Illness" name= "Illness" value="">
</br>
<br>
    <label for="Description">Description: </label>
    <input type="text" id="Description" name= "Description" value="">
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