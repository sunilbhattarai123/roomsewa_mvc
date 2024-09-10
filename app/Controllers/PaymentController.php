<?php


namespace App\Controllers;

use App\Helpers\payment;
use Phphelper\Core\Request;
use Phphelper\Core\Response;
use Phphelper\Core\Router;

class PaymentController
{
    #[Router(path: '/pay/{id}', middleware: 'auth')]

    public function paymentStart(Request $request, Response $response, $params)
    {
        $id = $params->id;

        $db = $request->getDatabase();
        $property = $db->fetchOne("properties", ['id' => $id]);
        if (!$property) {
            die("Property not found");
        }

        $description = $property['description'];
        $price = $property['estimated_price'] * 100;
        $responseKhalti = payment::initiatepayment($id, $description, $price);
        if (!isset($responseKhalti['payment_url'])) {
            die("Something went wrong initiating payment...");
        }


        $paymentUrl = $responseKhalti["payment_url"];
        return $response->redirect($paymentUrl);

    }

}