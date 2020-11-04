<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeesModel extends Model
{

    public function getEmployees()
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')->get(20, 0);
        return $query->getResult();
    }

    public function getEmployeebyId($id)
    {
        $db = \Config\Database::connect();

        $query = $db->table('employees')
            ->where('emp_no', $id)
            ->get();
        return $query->getResult();
    }
}
