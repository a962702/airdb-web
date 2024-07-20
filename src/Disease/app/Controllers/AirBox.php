<?php

namespace App\Controllers;

class AirBox extends BaseController
{
    public function getIndex(): string
    {
        return view('AirBox');
    }

    public function ml_Model(){
		$address = $this->input->post('address');		
		$command = '/opt/miniconda3/bin/python3 ./DiseaseFile/airBox.py'." ".$address." ".'87';
		exec($command,$result_array);
		echo json_encode($result_array);
	}

    public function postGetResult()
    {
        $url = 'http://model_service:8000/model/AirBox';
        $ml_data=$this->request->GetPost('ml_data');
        
        $headerArray=array("Content-type:application/json;","Accept:application/json");
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $ml_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        $result = curl_exec($ch);
        if (!$result)
        {
            die("failure connect");
        }
        curl_close($ch);
        echo $result;
    }
}
