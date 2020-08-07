<?php

$names = array(
    'Christopher',
    'Ryan',
    'Ethan',
    'John',
    'Zoey',
    'Sarah',
    'Michelle',
    'Samantha',
);

$surnames = array(
    'Walker',
    'Thompson',
    'Anderson',
    'Johnson',
    'Tremblay',
    'Peltier',
    'Cunningham',
    'Simpson',
    'Mercado',
    'Sellers'
);

$random_name = $names[mt_rand(0, sizeof($names) - 1)];

$random_surname = $surnames[mt_rand(0, sizeof($surnames) - 1)];

$fullName = $random_name . ' ' . $random_surname;

?>