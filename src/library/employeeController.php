<?php 
    
    // Importing employeeManager.php
    require("./employeeManager.php");

    // Loading employees JSON file and formatting it into an array
    $employeesJSON = file_get_contents("../../resources/employees.json");
    $employeesArray = json_decode($employeesJSON);

    // Choosing which fucntion should be executed 
    // according to the given ajax request params
    switch($_SERVER["REQUEST_METHOD"]){
        case "GET":
            $result = getAllEmployees($employeesArray);
            break;
    }
?>