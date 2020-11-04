<?php

namespace App\Controllers;

use App\Models\EmployeesModel;

class Employees extends BaseController
{
    public function index()
    {
        $emp = new EmployeesModel();
        $employessData = $emp->getEmployees();

        //print_r($emp->getEmployees());

        return $this->response->setJSON($employessData);
    }

    public function show($id = null)
    {
        $emp = new EmployeesModel();
        $employessData = $emp->getEmployeebyId($id);

        return $this->response->setJSON($employessData);
    }

    //--------------------------------------------------------------------

}
