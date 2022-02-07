<?php
require_once'vol.php';
$user=new Vol();
$user->hydrate(array(
    'Date_depart'=>$_POST['date_depart'],
    'Heure_depart'=>$_POST['heure_depart'],
    'Heure_arrivee'=>$_POST['heure_arrivee'],
    'ref_pilote'=>$_POST['ref_pilote'],
    'ref_avion'=>$_POST['ref_avion']

));
$user->ajoutvol();
?>