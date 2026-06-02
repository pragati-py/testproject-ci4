<?php

namespace App\Controllers;

use App\Models\EmployeeModel;

class Employee extends BaseController
{
    public function index()
    {
        $employeeModel = new EmployeeModel();

        $data['employees'] = $employeeModel->orderBy('salary', 'DESC')->findAll();
        #$data['employees'] = $employeeModel->where('department', 'HR')->orderBy('salary', 'DESC')->findAll();

        return view('employee_list', $data);
    }
}