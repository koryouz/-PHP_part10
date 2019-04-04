<?php

$regName = '/^[A-Za-zÀ-ÖØ-öø-ÿ]+([  \-][A-Za-zÀ-ÖØ-öø-ÿ]+)*$/';
$regAge = '/^[0-9]+([  \-][A-Za-zÀ-ÖØ-öø-ÿ0-9]+)*$/';
$regBuisness = '/^[A-Za-zÀ-ÖØ-öø-ÿ0-9]+([  \-][A-Za-zÀ-ÖØ-öø-ÿ0-9]+)*$/';

$stateMsgLastname = $stateMsgFirstname = $stateMsgAge = $stateMsgBusiness = '&#x2713';
        
if (empty($_POST['lastname'])) {
    $stateMsgLastname = '(Champ vide)';
} else if (!empty($_POST['lastname']) && !preg_match($regName, $_POST['lastname'])) {
    $stateMsgLastname = '(exemple : Dupont)';
}

if (empty($_POST['firstname'])) {
    $stateMsgFirstname = '(Champ vide)';
} else if (!empty($_POST['firstname']) && !preg_match($regName, $_POST['firstname'])) {
    $stateMsgFirstname = '(exemple : Alexandre)';
}
if (empty($_POST['age'])) {
    $stateMsgAge = '(Champ vide)';
} else if (!empty($_POST['age']) && !preg_match($regAge, $_POST['age'])) {
    $stateMsgAge = '(exemple : 18 ans)';
}

if (empty($_POST['business'])) {
    $stateMsgBusiness = '(Champ vide)';
} else if (!empty($_POST['business']) && !preg_match($regBuisness, $_POST['business'])) {
    $stateMsgBusiness = '(exemple : Saint-Gobain)';
}

if (!empty($_POST['selectedCivility'])) {
    $stateMsgCivility = '&#x2713';
} else if (empty($_POST['selectedCivility'])) {
    $stateMsgCivility = '(Champ vide)';
} 

if (!empty($_POST['lastname']) && preg_match($regName, $_POST['lastname']) && !empty($_POST['firstname']) && preg_match($regName, $_POST['firstname']) && !empty($_POST['age']) && preg_match($regAge, $_POST['age']) && !empty($_POST['business']) && preg_match($regName, $_POST['business']) && !empty($_POST['selectedCivility'])) {
    $validFormMsg = 'Bonjour, ' . htmlspecialchars($_POST['lastname']) . ' ' . htmlspecialchars($_POST['firstname']) . '. Tu as ' . htmlspecialchars($_POST['age']) . ' ans et tu travaille à ' . htmlspecialchars($_POST['business']);
} else {
    $validFormMsg = '';
}