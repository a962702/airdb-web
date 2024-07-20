<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex(): string
    {
        $session = session();
        if($session->get('user')!="")
        {
			redirect(base_url("TB"));
		}else
        {
			redirect(base_url("Login"));
		}
    }
}
