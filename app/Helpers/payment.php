<?php

namespace App\Helpers;

class payment
{
    public static function initiatePayment($property_id,$propertyName,$amount)
    {


        $curl = curl_init();

        $payload = [
            "return_url" => "http://localhost/payment",
            "website_url" => "http://localhost/",
            "amount" => "$amount",
            "purchase_order_id" => "$property_id",
            "purchase_order_name" => "$propertyName",
            "customer_info"=>[
        "name"=> "Sunil Bhattarai",
        "email"=> "test@khalti.com",
        "phone"=>"9800000001"
            ]
        ];
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://a.khalti.com/api/v2/epayment/initiate/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($payload),
            CURLOPT_HTTPHEADER => [
                'Authorization:  key '.getenv('KHALTI_SECRET_KEY'),
                'Content-Type: application/json',
            ],
        ]);

        $response = curl_exec($curl);
        if(!$response){
            die("somthing went wrong initiating payment");
        }
        curl_close($curl);
        return json_decode($response,true);
    }

}