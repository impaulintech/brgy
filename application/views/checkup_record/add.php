<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <title>Add</title>

    
</head>
  


<body>
<form action="<?= site_url('checkup_record/add')?>" method="post">

    

    <?php if(validation_errors()) 
	{
		echo validation_errors();
        
	}
    ?>

<div class="container-fluid">
    <div class="container">

    <h1>Add New checkuprecord</h1>
<br>
    <label for="role">pensioners Role</label>
    <select name="roleid" id="role">
            <option >Select</option>
            <option value="1">Female</option>
            <option value="2">Male</option>
            <option value="3">pensioners</option>
    </select>
</br>
<br>
    <label for="FirstName">FirstName: </label>
    <input type="text" id="FirstName" name= "FirstName" value="">
</br>
<br>
    <label for="Middle_Initial">Middle_Initial: </label>
    <input type="text" id="Middle_Initial" name= "Middle_Initial" value="">
</br>
<br>
    <label for="LastName">LastName: </label>
    <input type="text" id="LastName" name= "LastName" value="">
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
    <label for="Address">Address: </label>
    <input type="text" id="Address" name= "Address" value="">
</br>
<br>
    <label for="Illness">Illness: </label>
    <input type="text" id="Illness" name= "Illness" value="">
</br>
<br>
    <label for="Dateofcheckup">Dateofcheckup: </label>
    <input type="text" id="Dateofcheckup" name= "Dateofcheckup" value="">
</br>
<br>
    <input type="submit" value="Register">
</br>
</div>
</div>


  

<script src="<?=base_url('assets/js/jquery.js')?>"></script>
    <script src="<?=base_url('assets/js/popper.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>

</form>
</body>
</html>



