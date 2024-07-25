<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function getIndex(): string
    {
        return view('Login');
    }

    public function postcheckLogin()
    {
        $u_account = $this->request->GetPost('account');
        $u_password = $this->request->GetPost('password');
        if(!is_null($u_account) && !is_null($u_password))
        {
            $row = $this->db->table('user')->where('account', $u_account)->get()->getRow();
            if (isset($row))
            {
                if ($row->password == $u_password)
                {
                    if ($row->state == 'Y')
                    {
                        return json_encode([2]); // account / password / state match
                    }
                    else
                    {
                        return json_encode([1]); // account and password match, but state not match
                    }
                }
                else
                {
                    return json_encode([3]); // account match, but password not match
                }
            }
            return json_encode([0]); // account not match
        }
    }
    function postsetSession()
    {
        $session = session();
        $u_account = $this->request->GetPost('account');
        $session->set('user',$u_account);
        echo json_encode($u_account);
    }


    function postgetSession()
    {
        $session = session();
        $session->remove('user');
    }
}
