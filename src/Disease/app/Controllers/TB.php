<?php

namespace App\Controllers;

class TB extends BaseController
{
    public function getIndex(): string
    {
        return view('TB');
    }

    function postFetchAQI()
    {
        $url = 'http://aqi_service:8000/aqi';
        $addr=$this->request->GetPost('addr');
        $date=$this->request->GetPost('date');
        $period=$this->request->GetPost('period');
        $url = $url . '?addr=' . urlencode($addr) . '&date=' . urlencode($date) . '&period=' . urlencode($period);
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $output = curl_exec($ch);
        curl_close($ch);
        
        echo $output;
    }

    function postGetResult()
    {
        $url = 'http://model_service:8000/model/TB';
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
