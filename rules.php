<?php
function checkTemperature($vitalData){
    $value=$vitalData["value"];

    
    if ($value < 97) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Temperature low";
}
 elseif ($value  <= 99) {
     $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Temperature normal";
 }
 else{
    $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Fever detected";
 }

    return $vitalData;
}

function  checkPulse($vitalData){
        $value = $vitalData["value"];

    if ($value < 60) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Pulse rate low";
    } elseif ($value <= 100) {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Pulse normal";
    } else {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Pulse rate high";
    }

    return $vitalData;
}
function checkBloodPressure($vitalData) {
    list($systolic, $diastolic) = explode("/", $vitalData["value"]);

    if ($systolic < 90 || $diastolic < 60) {
        $vitalData["status"] = "LOW";
        $vitalData["message"] = "Blood pressure low";
    } elseif ($systolic <= 120 && $diastolic <= 80) {
        $vitalData["status"] = "NORMAL";
        $vitalData["message"] = "Blood pressure normal";
    } else {
        $vitalData["status"] = "HIGH";
        $vitalData["message"] = "Blood pressure high";
    }

    return $vitalData;
}


?>