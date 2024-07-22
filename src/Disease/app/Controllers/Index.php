<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex()
    {
        if($this->session->get('user')!="")
        {
            return redirect()->to(base_url("TB"));
        }
        else
        {
            return redirect()->to(base_url("Login"));
        }
    }
}
