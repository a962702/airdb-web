<?php

namespace App\Controllers;

class COPD extends BaseController
{
    public function getIndex(): string
    {
        return view('COPD');
    }
    
    function postGetAllName(){
        $result_array = array(
            "HBV",
            "HCV",
            "Cancer",
            "Dementia",
            "Hyperlipidemia",
            "Diabetes Mellitus",
            "Myocardial Infraction",
            "Chronic Kidney Disease",
            "Cerebrovascular Disease",
            "Congestive Heart Failure",
            "Peripheral Vascular Disease",
            "Pneumonia",
            "Obstructive Lung Disease",
            "Acute Renal Failure",
        );
        echo json_encode($result_array);
    }

    function postGetResult() {

        $url = 'http://model_service:8000/model/COPD';
        $ml_data=$this->request->GetPost('ml_data');
        
        $headerArray=array("Content-type:application/json;","Accept:application/json");
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $ml_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,$headerArray);
        $result = curl_exec($ch);
        if (!$result) {
            die("failure connect");
        }
        curl_close($ch);
        echo $result;
    }
}
