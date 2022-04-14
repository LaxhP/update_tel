<?php

require_once('ypareo_rest.php');
require_once('class_update_rest.php');


function update($app){
    $modif= new update();
    $modif->setNomApprenant($app->nomApprenant);
    $modif->setCodeCivilite($app->civiliteApprenant);
    $modif->setPrenomApprenant($app->prenomApprenant);
    $modif->setAdr1($app->adresse->adr1);
    $modif->setCp($app->adresse->cp);
    $modif->setVille($app->adresse->ville);
    $modif->setCodeCommune($app->adresse->codeCommune);
    $modif->setTel1($app->adresse->tel1);
    $modif->setTel2($app->adresse->tel2);
    $modif->setEmail($app->adresse->email);
    $modif->setDateNaissance($app->dateNaissanceApprenant);
    $modif->setCodeNationalite($app->codeNationalite);
    $modif->setEstReconnuHandicape($app->estReconnuHandicape);
    $modif->setTel2($app->adresse->tel1);
    return $modif;
}


$i=0;
$liste=getProspects();
//var_dump($liste);
foreach($liste as $app){
    if (empty($app->adresse->tel2)){
        if(isset($app->adresse->tel1)) {
            $tel1=$app->adresse->tel1;
            $prems=$tel1[0] . $tel1[1];
            if ($prems=='06' || $prems=='07'){
                //var_dump($app->adresse);
                $modif=update($app);
                $json=json_encode($app);
                $bytes = file_put_contents("save_partiel.json", PHP_EOL . $json, FILE_APPEND);
                $code=$app->codeApprenant;
                //echo('</br> ----------------');
                $objet=json_encode((object) array_merge((array)$app,(array)$modif));
                //var_dump(json_decode($objet));
                echo('</br>---------------------------------------------</br>');
                var_dump(updateProspect($code,$objet));
                $array=array($app->codeApprenant);
                $i++;
                if ($i==100){
                    break;
                } 
            }
        }
    }
}





?>