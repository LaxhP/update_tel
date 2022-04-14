<?php



function getProspects(){
    $baseUrl = 'lien.fr';   
    $jeton = 'XXX';  

    // REQUÊTE CONSULTATION
    $url = $baseUrl . "/r/v1/formation-longue/prospects?codesSite=5&codesPeriode=2" ; //. $filtre ;
    // options de la session
    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => [ 
            "X-Auth-Token: " . $jeton,
            "Content-Type: application/json"
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST=> 0,
        CURLOPT_SSL_VERIFYPEER=>0,
    ];
    // initialisation de la session
    $ch = curl_init();
    
    // configuration de la session
    curl_setopt_array($ch, $options);
    // exécution de la requête
    $response = curl_exec($ch); 
    var_dump(curl_error($ch));
    // fermeture de la session
    curl_close($ch);
    // affiche les données au format tableau
    $data =json_decode($response);
    return $data;

}

function updateProspect($code,$modif){
    $baseUrl = "lien.fr";
    $jeton = "XXX";
    
    // REQUÊTE CONSULTATION
    $url = $baseUrl . "/r/v1/prospects/" . $code;
    
    // options de la session
    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => [
            "X-Auth-Token: " . $jeton,
            "Content-Type: application/json"
        ],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYHOST=> 0,
        CURLOPT_SSL_VERIFYPEER=>0,
        CURLOPT_CUSTOMREQUEST=>'PUT',
        CURLOPT_POST=>true,
        CURLOPT_POSTFIELDS => ($modif),
    ];
    
    // initialisation de la session
    $ch = curl_init();
    var_dump($options);
    // configuration de la session
    var_dump(curl_setopt_array($ch, $options));
    // exécution de la requête
    $response = curl_exec($ch);
    var_dump(curl_error($ch));
    // fermeture de la session

    
    curl_close($ch);
    // affiche les données au format tableau
    $data =json_decode($response);
    return $response; 
}


?>