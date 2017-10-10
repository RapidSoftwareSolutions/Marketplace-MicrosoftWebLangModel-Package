<?php
$routes = [
    'metadata',
    'calculateConditionalProbability',
    'calculateJointProbability',
    'generateNextWords',
    'breakIntoWords',
    'listAvailableModels'
];
foreach($routes as $file) {
    require __DIR__ . '/../src/routes/'.$file.'.php';
}

