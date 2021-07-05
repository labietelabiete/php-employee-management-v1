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
    <h3>Current Employees Table</h3>
    <a href="./library/loginController.php?logout=true" class="btn btn-lg btn-primary btn-logout">
        Logout
        <!-- <button class="w-95 btn btn-lg btn-primary btn-logout"">Logout</button> -->
    </a>
    <div id="gridTable"></div>
    <script>
    async function loadEmployees(){
        
        let response = await $.getJSON("../resources/employees.json");

        $("#gridTable").jsGrid({
            width: "100%",
            height: "400px",

            filtering: true,
            inserting: true,
            editing: true,
            sortings: true,
            paging: true,
            autoload: true,
            pageSize: 10,
            pageButtonCount: 5,
            deleteConfirm: "Do you really want to delete this employee entry?",

            data: response,

            fields:[
                {
                    name: "id",
                    type: "hidden",
                    css: 'hide'
                },
                {
                    name: "name",
                    type: "text",
                    width: 30,
                    validate: "required"
                },
                {
                    name: "lastName",
                    type: "hidden",
                    css: 'hide'
                },
                {
                    name: "email",
                    type: "text",
                    width: 40,
                    validate: "required"
                },
                {
                    name: "gender",
                    type: "hidden",
                    css: 'hide'
                },
                {
                    name: "age",
                    type: "number",
                    width: 10,
                    validate: "required" 
                },
                {
                    name: "street Nº",
                    type: "text",
                    width: 10,
                    validate: "required" 
                },
                {
                    name: "city",
                    type: "text",
                    width: 50,
                    validate: "required"
                },
                {
                    name: "state",
                    type: "text",
                    width: 10,
                    validate: "required" 
                },
                {
                    name: "postalCode",
                    type: "number",
                    width: 30,
                    validate: "required" 
                },
                {
                    name: "phoneNumber",
                    type: "number",
                    width: 30,
                    validate: "required" 
                },
                {   
                    name: "add",
                    type: "control"
                    
                },
            ],

        });
    }
    loadEmployees();
    </script>
</body>
</html>


