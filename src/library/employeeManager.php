<?php
/**
 * EMPLOYEE FUNCTIONS LIBRARY
 *
 * @author: Jose Manuel Orts
 * @date: 11/06/2020
 */

function addEmployee(array $newEmployee)
{
// TODO implement it
}


function deleteEmployee(string $id)
{
// TODO implement it
}


function updateEmployee(array $updateEmployee)
{
// TODO implement it
}


function getEmployee(string $id)
{
// TODO implement it
}


function removeAvatar($id)
{
// TODO implement it
}


function getQueryStringParameters(): array
{
// TODO implement it
}

function getNextIdentifier(array $employeesCollection): int
{
// TODO implement it
}

function getAllEmployees($filter)
{   
    // print_r ($filter);
    foreach($filter as $object){
        $output [] = array(
            'id' => $object->id,
            'name' => $object->name,
            'lastName' => $object->lastName,
            'email' => $object->email,
            'gender' => $object->gender,
            'age' => $object->age,
            'streetAddress' => $object->streetAddress,
            'city' => $object->city,
            'state' => $object->state,
            'postalCode' => $object->postalCode,
            'phoneNumber' => $object->phoneNumber,
        );
        // print_r ($output);
    }
    return $output;
    // echo json_encode($output);
    // echo $filter;

}
