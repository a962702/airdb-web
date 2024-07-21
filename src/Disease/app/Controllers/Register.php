<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function getIndex(): string
    {
        return view('Register');
    }

    public function postAddUser()
    {
        $u_account = $this->request->GetPost('account');
        $u_password = $this->request->GetPost('password');
        $u_department = $this->request->GetPost('department');
        $command = '/usr/bin/python3 ./DiseaseFile/Register.py'." ".$u_account." ".$u_password." ".$u_department;
        exec($command,$result_array);
        return json_encode($result_array);
    }
}
