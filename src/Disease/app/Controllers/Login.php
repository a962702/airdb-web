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
        if(isset($_POST['account']) && isset($_POST['password']))
        {
            $u_account = $this->request->GetPost('account');
            $u_password = $this->request->GetPost('password');
            $command = '/usr/bin/python3 ./DiseaseFile/Login.py'." ".$u_account." ".$u_password;
            //exec($command,$result_array);
            $result_array = ["2"];
            if(!strcmp($result_array[0],"2")
            ){
                echo json_encode($result_array);
                exit(0);
            }
            
            if($result_array[0]==="2")
            {
                echo json_encode($result_array);
            }
            else
            {
                echo json_encode($result_array);
            }
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
