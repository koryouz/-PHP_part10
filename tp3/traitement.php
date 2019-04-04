<?php

$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

function showArrays($portrait1, $portrait2, $portrait3, $portrait4) {
    $array1 = $portrait1['name'] . ' | ' . $portrait1['firstname'] . ' | ' . $portrait1['portrait'];
    $array2 = $portrait2['name'] . ' | ' . $portrait2['firstname'] . ' | ' . $portrait2['portrait'];
    $array3 = $portrait3['name'] . ' | ' . $portrait3['firstname'] . ' | ' . $portrait3['portrait'];
    $array4 = $portrait4['name'] . ' | ' . $portrait4['firstname'] . ' | ' . $portrait4['portrait'];
    $result = '<p>' . $array1 . '<p/>' . '<p>' . $array2 . '<p/>' . '<p>' . $array3 . '<p/>' . '<p>' . $array4 . '<p/>';
    return $result;
}
?>

