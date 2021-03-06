<?php

include __DIR__ . '/../setup.php';

use JPBernius\FMeat\FMeatClient;
use JPBernius\FMeat\Configurations\Locations;
use JPBernius\FMeat\Exeptions\NetworkingException;

$FMeatClient = new FMeatClient(true);

$locations = [
    'fmiBistroWeek' => Locations::FMI_BISTRO,
    'ippBistroWeek' => Locations::IPP_BISTRO,
    'mensaWeek' => Locations::MENSA_GARCHING,
    'stucafeMaschbauWeek' => Locations::STUCAFE_BOLTZMANNSTRASSE
];

$output = [];

foreach ($locations as $viewKey => $apiName) {
    try {
        $output[$viewKey] = $FMeatClient->getCurrentWeekForLocation($apiName);
    } catch (NetworkingException $e) {
        $output[$viewKey] = null;
    }
}

//Render the template
renderTemplate('hunger', $output);
