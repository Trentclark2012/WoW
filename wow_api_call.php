<?php
    // VARIABLES
    $section = array("data","pvp", "talents");
    $realm = array("Stormrage");
    $name = "Mindreith";
    $api_key = "7up93v5kqsuf47r583th9y2q95khmazr";
    $pvp_url = 'https://us.api.battle.net/wow/' . $section[0] .'2/talents?locale=en_US&apikey=' . $api_key;
     
    /* TODO:    
    $character_url = 
    $leaderboard_url = 
    */
 
    function callAPI($url)
    {       
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_USERAGENT, 'WOW');   
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('X-Originating-Ip: 64.132.94.34'));    
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);               
        return $data;
    }
     
    $pvp_response = callAPI($pvp_url); // root level array
     
    
    $pvp_data = $pvp_response['pvp']['brackets'];
    
     
    
    foreach($pvp_data as $d => $data)
    {
        foreach($data as $s => $statistic)
        {
            echo $s . "=>" . $statistic . "\n";
        }
    }   
    
     
    echo "<pre>";
    print_r($pvp_response);
    echo "</pre>";
 
?>