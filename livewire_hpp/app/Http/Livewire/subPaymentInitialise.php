<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Spatie\ArrayToXml\ArrayToXml;


class subPaymentInitialise {

    

    public function store()
    {
        global $ClientId;
        global $account;
        $orderNo;
        $amount;
        $typeId;
        $currencyId;
        $countryId;
        $language;
        $version;
        $platform;
        $phoneCountryId;
        $operatorId;
        $phoneNo;
        $email;
        $ip;
        dd($account);

        $xml_data = [
        'initialize-payment' => [ 
            '_attributes' => ['account' => $account, 'client-id' => $ClientId], 
            'transaction' => [
                '_attributes' => ['order-no' => $orderNo, 'type-id' => $typeId], 
                    'amount' => [
                        '_attributes' => ['currency-id' => $currencyId, 'country-id' => $countryId],
                        '_value' => $amount],
            ],
            'client-info' => [
                '_attributes' => ['language' => $language, 'version' => $version, 'platform' => $platform], 
                'mobile' => [
                    '_attributes' => ['country-id' => $phoneCountryId, 'operator-id' => $operatorId],
                    '_value' => $phoneNo
                ],
                    'email' => $email,
                    'ip' => $ip
            ],    
        ],    
        
    ];



        $xml_body = ArrayToXml::convert($xml_data, 'root');
 

        function uuid(){
            $data = random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); 
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }


        $uuid = uuid();

        $headers = [
            'Content-Type' => 'application/json',
            'AccessToken' => 'key',
            'Authorization' => 'Bearer token',
        ];

        $client = new \GuzzleHttp\Client([
            'headers' => $headers
        ]);

        $url = 'https://vy.uat-01.cellpointmobile.net/mpoint/initialize-payment';

        $response = $client->request('POST', $url, [
        'headers' => [
        'Content-Type' => 'text/xml',
        'Authorization' => '$uuid'
        ],
        'auth' => ['vy', 'DEMOisNO_2'],
        'body' => $xml_body
        ]);


        $initialize_statusCode = $response->getStatusCode();
        //$initialize_statusPhrase = $response->reasonPhrase;



        $body = $response->getBody()->getContents();
        $xml = simplexml_load_string($body);
        $transactionId1 = $xml->transaction;
        $transactionId2 = $transactionId1->attributes()->id;

        $str = preg_replace('/<([^ ]+) ([^>]*)>([^<>]*)<\/\\1>/i', '<$1 $2><value>$3</value></$1>', $body);
        $xmlFull = simplexml_load_string($str);
        $json = json_encode($xmlFull);


        $initialize_payment_response = json_decode($json,TRUE);
        // get the server from the header
        $server = $response;
        $server2 = $server->getHeader('server');
        $server3 = $server2[0];

    }




}