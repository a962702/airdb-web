<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex()
    {
        $session = session();
        if($session->get('user')!="")
        {
            return redirect()->to(base_url("TB"));
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }
}
