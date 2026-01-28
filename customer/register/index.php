<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"></head>
    <style>
        form
        {
            display:block;
            padding-left:20px;
            padding-right:50%;
        }
    </style>
<body>
    <!-- get navbar -->
    <?php require_once $_SERVER["DOCUMENT_ROOT"] . '\leveluploot\templates\navbar.php' ?>

    <h2 class="alert alert-info" style="margin-right:25%; margin-left:25%; text-align:center;">Register Here</h2>
    <form method="POST">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" class="form-control">
        </div>
    </form>

</body>
</html>
