<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
</head>
<body>
    
<form action="<?= site_url('illness/add')?>" method="post">

    <h1>Add New illness</h1>

    <?php if(validation_errors())
    {
        echo validation_errors();
    }
    ?>
    
<br>
    <label for="sname">Sick Name:</label>
    <input type="text" id="sname" name = "sname" value = "">
<br>
    <label for="contagious">contagious:</label>
    <input type="text" id="contagious" name = "contagious" value = "">
<br>
    <label for=danger_level>Last Name:</label>
    <input type="text" id="danger_level" name = "danger_level" value = "">


<input type="submit" value="Register">

</body>
</form>
</html>

