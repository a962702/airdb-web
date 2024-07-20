<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex(): string
    {
        $session = session();
        if($session->get('user')!="")
        {
            redirect()->to(base_url("TB"));
        }
        else
        {
            redirect()->to(base_url("Login"));
        }
    }
}
