<?php

namespace App\Helpers;

class requestsender
{
    public static function send($user_id)
    {

        $curl = curl_init();

            curl_setopt_array($curl, [
            CURLOPT_URL => 'http://localhost:5000/show/similar?user_id='.$user_id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ]);
    

        $response = curl_exec($curl);
        // print_r($response);
        if(!$response){
            die("somthing went wrong recommending properties");
        }
        curl_close($curl);
        return json_decode($response,true);
    }

}