<?php
$regName = '/^[A-Za-zÀ-ÖØ-öø-ÿ]+([ \-][A-Za-zÀ-ÖØ-öø-ÿ]+)*$/';
$regDateofBirth = '/^([0-9]{2})[- ]([0-9]{2})[- ]([0-9]{4})$/';
$regAdress = '/^[0-9]{1,4}[A-Za-z]*+([ ][A-Za-zÀ-ÖØ-öø-ÿ0-9]+)+[ ][0-9]{5}[ ][A-Za-zÀ-ÖØ-öø-ÿ -]+$/';
$regMail = '/^[A-Za-z]+([-.A-Za-z])*@[a-z]+\.[a-z]+$/';
$regPhone = '/^[0]([0-9]){1}(([- ]*[0-9]){2}){4}$/';
$regQualifications = '/^[A-Za-zÀ-ÖØ-öø-ÿ0-9+ ]*$/';
$regPoleEmploi = '/^[1-9]{7}[A-Za-z]{1}$/';
$regBadgeNumber = '/^[1-9]{8}$/';
$regTextArea = '/^[ ,\'."A-Za-zÀ-ÖØ-öø-ÿ0-9?!]*$/';

$resultMsgLastname = $resultMsgFirstname = $resultMsgDateOfBirth = $resultMsgCountryOfBirth = $resultMsgNationality = $resultMsgAdress = $resultMsgEmail = $resultMsgPhone = $resultMsgCodecAdemyLink = $resultMsgBadgeNumber = $resultMsgPoleEmploiNumber = $resultMsgQualifications = $resultMsgHereos = $resultMsgHacks = $resultMsgExperiences = '';
$stateMsgLastname = $stateMsgFirstname = $stateMsgDateOfBirth = $stateMsgCountryOfBirth = $stateMsgNationality = $stateMsgAdress = $stateMsgEmail = $stateMsgPhone = $stateMsgQualifications = $stateMsgPoleEmploiNumber = $stateMsgBadgeNumber = $stateMsgCodecAdemyLink = $stateMsgHereos = $stateMsgHacks = $stateMsgExperiences = '&#x2713';

if (empty($_POST['lastname'])){
    $stateMsgLastname = '(Champ vide)';
}else if (!empty($_POST['lastname']) && !preg_match($regName, $_POST['lastname'])){
    $stateMsgLastname = '(exemple : Dupont)';
}else{
    $resultMsgLastname = $_POST['lastname'];
}

if (empty($_POST['firstname'])){
    $stateMsgFirstname = '(Champ vide)';
}else if (!empty($_POST['firstname']) && !preg_match($regName, $_POST['firstname'])){
    $stateMsgFirstname = '(exemple : Alexandre)';
}else{
    $resultMsgFirstname = $_POST['firstname'];
}

if (empty($_POST['dateOfBirth'])){
    $stateMsgDateOfBirth = '(Champ vide)';
}else if (!empty($_POST['dateOfBirth']) && !preg_match($regDateofBirth, $_POST['dateOfBirth'])){
    $stateMsgDateOfBirth = '(exemple : 06-12-1994)';
}else{
    $resultMsgDateOfBirth = $_POST['dateOfBirth'];
}

if (empty($_POST['countryOfBirth'])){
    $stateMsgCountryOfBirth = '(Champ vide)';
}else if (!empty($_POST['countryOfBirth']) && !preg_match($regName, $_POST['countryOfBirth'])){
    $stateMsgCountryOfBirth = '(exemple : France)';
}else{
    $resultMsgCountryOfBirth = $_POST['countryOfBirth'];
}

if (empty($_POST['nationality'])){
    $stateMsgNationality = '(Champ vide)';
}else if (!empty($_POST['nationality']) && !preg_match($regName, $_POST['nationality'])){
    $stateMsgNationality = '(exemple : Français)';
}else{
    $resultMsgNationality = $_POST['nationality'];
}

if (empty($_POST['adress'])){
    $stateMsgAdress = '(Champ vide)';
}else if (!empty($_POST['adress']) && !preg_match($regAdress, $_POST['adress'])){
    $stateMsgAdress = '(exemple : 123d Avenue du General Foch 60150 Noyon)';
}else{
    $resultMsgAdress = $_POST['adress'];
}

if (empty($_POST['email'])){
    $stateMsgEmail = '(Champ vide)';
}else if (!empty($_POST['email']) && !preg_match($regMail, $_POST['email'])){
    $stateMsgEmail = '(dupont.alexandre@exemple.fr)';
}else{
    $resultMsgEmail = $_POST['email'];
}

if (empty($_POST['phone'])){
    $stateMsgPhone = '(Champ vide)';
}else if (!empty($_POST['phone']) && !preg_match($regPhone, $_POST['phone'])){
    $stateMsgPhone = '(exemple : 06 12 52 36 74)';
}else{
    $resultMsgPhone = $_POST['phone'];
}

if (empty($_POST['qualifications'])){
    $stateMsgQualifications = '(Champ vide)';
}else if (!empty($_POST['qualifications']) && !preg_match($regQualifications, $_POST['qualifications'])){
    $stateMsgQualifications = '(exemple : BAC+2 IUT LILLE)';
}else{
    $resultMsgQualifications = $_POST['qualifications'];
}

if (empty($_POST['poleEmploiNumber'])){
    $stateMsgPoleEmploiNumber = '(Champ vide)';
}else if (!empty($_POST['poleEmploiNumber']) && !preg_match($regPoleEmploi, $_POST['poleEmploiNumber'])){
    $stateMsgPoleEmploiNumber = '(exemple : 1234567A)';
}else{
    $resultMsgPoleEmploiNumber = $_POST['poleEmploiNumber'];
}

if (empty($_POST['badgeNumber'])){
    $stateMsgBadgeNumber = '(Champ vide)';
}else if (!empty($_POST['badgeNumber']) && !preg_match($regBadgeNumber, $_POST['badgeNumber'])){
    $stateMsgBadgeNumber = '(exemple : 12345678)';
}else{
    $resultMsgBadgeNumber = $_POST['badgeNumber'];
}

if (empty($_POST['codecAdemyLink'])){
    $stateMsgCodecAdemyLink = '(Champ vide)';
}else if (!empty($_POST['codecAdemyLink']) && !preg_match($regName, $_POST['codecAdemyLink'])){
    $stateMsgCodecAdemyLink = '(exemple : identifiant)';
}else{
    $resultMsgCodecAdemyLink = $_POST['codecAdemyLink'];
}

if (empty($_POST['hereos'])){
    $stateMsgHereos = '(Champ vide)';
}else if (!empty($_POST['hereos']) && !preg_match($regTextArea, $_POST['hereos'])){
    $stateMsgHereos = '(Je serais Superman, c\'est le meilleur !)';
}else{
    $resultMsgHereos = $_POST['hereos'];
}

if (empty($_POST['hacks'])){
    $stateMsgHacks = '(Champ vide)';
}else if (!empty($_POST['hacks']) && !preg_match($regTextArea, $_POST['hacks'])){
    $stateMsgHacks = '(J\'ai hack la NASA !)';
}else{
    $resultMsgHacks = $_POST['hacks'];
}

if (empty($_POST['experiences'])){
    $stateMsgExperiences = '(Champ vide)';
}else if (!empty($_POST['experiences']) && !preg_match($regTextArea, $_POST['experiences'])){
    $stateMsgExperiences = '(Oui, j\'ai développer un site nommer Facebook !)';
}else{
    $resultMsgExperiences = $_POST['experiences'];
}



