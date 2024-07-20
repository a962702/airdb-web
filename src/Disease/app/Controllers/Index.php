<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function getIndex(): string
    {
        if($this->session->get('user')!="")
        {
			redirect(base_url("TB"));
		}else
        {
			redirect(base_url("Login"));
		}
    }
}
