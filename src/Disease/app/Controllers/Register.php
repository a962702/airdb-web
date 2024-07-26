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
        $row = $this->db->table('user')->where('account', $u_account)->get()->getRow();
        if (isset($row))
        {
            return json_encode([1]); // Account has been registered
        }
        $new_user = [
            'account' => $u_account,
            'password' => $u_password,
            'department' => $u_department,
            'state' => 'N',
        ];
        $this->db->table('user')->insert($new_user);
        return json_encode([0]); // Account added
    }
}
