<!-- TODO Main view or Employees Grid View here is where you get when logged here there's the grid of employees -->
<?php
echo "Login successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../assets/css/main.css" />
    <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid.min.css" />
    <link type="text/css" rel="stylesheet" href="../node_modules/jsgrid/dist/jsgrid-theme.min.css" />
    
    <script type="text/javascript" src="../node_modules/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="../node_modules/jsgrid/dist/jsgrid.min.js"></script>
    
    <title>Dashboard</title>
</head>
<body>
    <?php 
        include "../assets/html/header.html";
    ?>
        <h3>Current Employees Table</h3>
        <a href="./library/loginController.php?logout=true" class="btn btn-lg btn-primary btn-logout">
            Logout
            <!-- <button class="w-95 btn btn-lg btn-primary btn-logout"">Logout</button> -->
        </a>
        <div id="gridTable"></div>
    <?php 
        include "../assets/html/footer.html";
    ?>
    <script type="text/javascript" src="../assets/js/index.js"></script>
</body>
</html>


