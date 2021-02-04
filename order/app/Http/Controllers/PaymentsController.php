<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;
use Spatie\ArrayToXml\ArrayToXml;

// _____________________________________________________________________________________________________

class PaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return('hello world');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('payment');
    }
    
    
       
// _____________________________________________________________________________________________________
    
    
    /**
    * Call the \pay service.
    *
    * @return \Illuminate\Http\Response
    */
    public function route(Request $request)
    {
        
        //
        //
        function uuid(){
            $data = random_bytes(16);
            $data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
            $data[8] = chr(ord($data[8]) & 0x3f | 0x80); 
            return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
        }

        $Client_id = $request->input('Client-id');
        $account = $request->input('account');
        $storedCard = $request->input('stored-card');
        $initializeId = $request->input('transaction-id');
        $typeId = $request->input('type-id');
        $currencyId = $request->input('currency-id');
        $countryId = $request->input('country-id');
        $amount = $request->input('amount');
        $language = $request->input('language');
        $version = $request->input('version');
        $platform = $request->input('platform');
        $phoneCountryId = $request->input('phoneCountryId');
        $operatorId = $request->input('operator-id');
        $phoneNo = $request->input('phone-no');
        $email = $request->input('email');
        $ip = $request->input('ip');
         
        
    /*    $xml_body = '<?xml version="1.0" encoding="UTF-8"?>
        <root>
            <pay client-id="10100">
                <transaction id="9625721">
                    <card type-id="7">
                        <amount>1000</amount>
                    </card>
                </transaction>
                <client-info language="us" version="9.99" platform="HTML5/1.00">
                    
        
                </client-info>
            </pay>
        </root>';
        */


$xml_data = [
    'pay' => [ 
        '_attributes' => ['account' => $account, 'client-id' => $Client_id], 
        'transaction' => [
            '_attributes' => ['store-card' => $storedCard, 'id' => $initializeId], 
                'card' => [
                    '_attributes' => ['type-id' => $typeId],
                    'amount' => [
                    '_attributes' => ['currency-id' => $currencyId, 'country-id' => $countryId],
                    '_value' => $amount
                    ],
            ],
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

    

    $uuid = uuid();
    $client = new \GuzzleHttp\Client();
    $url = 'https://vy.uat-01.cellpointmobile.net/mpoint/pay';

    $response = $client->request('POST', $url, [
    'headers' => [
    'Content-Type' => 'text/xml',
    'Authorization' => '$uuid'
    ],
    'auth' => ['vy', 'DEMOisNO_2'],
    'body' => $xml_body
    ]);


         
    

    $pay_statusCode = $response->getStatusCode();

    $body = $response->getBody()->getContents();
    $xml = simplexml_load_string($body);
    $json = json_encode($xml);
    $pay_response = json_decode($json,TRUE);

    // get the server from the header
    $server = $response;
    $server2 = $server->getHeader('server');
    $server3 = $server2[0];

    

    return view('payment',[
            'pay_response' => $pay_response,
            'pay_statusCode' => $pay_statusCode,
            'server_route' => $server3

        ]);
    }

    // $transactionId1 = $xml->transaction;
    // $transactionId2 = $transactionId1->attributes()->id;

// _____________________________________________________________________________________________________


   /**
    * Call the \authorization service.
    * 
    * @return \Illuminate\Http\Response
    */
   public function authorization(Request $request)
   {
       //
       //
       function uuid(){
           $data = random_bytes(16);
           $data[6] = chr(ord($data[6]) & 0x0f | 0x40); 
           $data[8] = chr(ord($data[8]) & 0x3f | 0x80); 
           return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
       }


       $Client_id = $request->input('Client-id');
       $account = $request->input('account');
       $typeId = $request->input('type-id');
       $initializeId = $request->input('transaction-id');

       $currencyId = $request->input('currency-id');
       $countryId = $request->input('country-id');
       $amount = $request->input('amount');
       

       $cardNumber = $request->input('cardNumber');
       $cardExpiry = $request->input('cardExpiry');
       $cardCVC = $request->input('cardCVC');
       $cardHolderName = $request->input('cardHolderName');
       $cardTypeId = $request->input('cardTypeId');

       $language = $request->input('language');
       $version = $request->input('version');
       $platform = $request->input('platform');
       $phoneCountryId = $request->input('phoneCountryId');
       $operatorId = $request->input('operator-id');
       $phoneNo = $request->input('phone-no');
       $email = $request->input('email');
       $customerRef = $request->input('customer-ref');


       $xml_data = [
        'authorize-payment' => [ 
            '_attributes' => ['account' => $account, 'client-id' => $Client_id], 
            'transaction' => [
                '_attributes' => ['type-id' => $typeId, 'id' => $initializeId], 
                    'card' => [
                        '_attributes' => ['type-id' => $typeId],
                        'amount' => [
                        '_attributes' => ['currency-id' => $currencyId, 'country-id' => $countryId],
                        '_value' => $amount
                        ],
                        'card-number' => $cardNumber,
                        'expiry' => $cardExpiry,
                        'cvc' => $cardCVC,
                        'card-holder-name' => $cardHolderName,
                ],
            ],
            'client-info' => [
                '_attributes' => ['language' => $language, 'version' => $version, 'platform' => $platform], 
                'mobile' => [
                    '_attributes' => ['country-id' => $phoneCountryId, 'operator-id' => $operatorId],
                    '_value' => $phoneNo
                ],
                    'email' => $email,
                    'customer-ref' => $customerRef
            ],    
        ],    
        
    ];





    /*      
    //    $xml_body = '<?xml version="1.0" encoding="UTF-8"?>
    //    <root>
    //        <authorize-payment account="101002" client-id="10100">
    //            <transaction type-id="10091" id="9626751">
    //                <card type-id="7" >
    //                    <amount currency-id="578"  country-id="102">1000</amount>
    //                    <!--<card-holder-name>Nikhil</card-holder-name>-->
    //                    <card-number>5413330300006005</card-number>
    //                    <expiry>01/23</expiry>
    //                    <cvc>005</cvc>
    //                    <card-holder-name>master card</card-holder-name>
    //                 </card>
    //            </transaction>
    //            <client-info language="en" version="1.43" platform="HTML5">
    //                <mobile operator-id="20000" country-id="200">9423001641</mobile>
    //                <email>nikhil.sabhani@cellpointmobile.com</email>
    //                <customer-ref>TestCustomerRef</customer-ref>
    //            </client-info>
    //        </authorize-payment>
    //    </root>';
    */

    $xml_body = ArrayToXml::convert($xml_data, 'root');

    

    $uuid = uuid();
    $client = new \GuzzleHttp\Client();
    $url = 'https://vy.uat-01.cellpointmobile.net/mpoint/authorize-payment';

    $response = $client->request('POST', $url, [
    'headers' => [
    'Content-Type' => 'text/xml',
    'Authorization' => '$uuid'
    ],
    'auth' => ['vy', 'DEMOisNO_2'],
    'body' => $xml_body
    ]);



$authorize_statusCode = $response->getStatusCode();


$body = $response->getBody()->getContents();
$str = preg_replace('/<([^ ]+) ([^>]*)>([^<>]*)<\/\\1>/i', '<$1 $2><value>$3</value></$1>', $body);
$xml = simplexml_load_string($str);
$transaction_id = 
//$xml = simplexml_load_string($body);
$json = json_encode($xml);
$authorization_response = json_decode($json,TRUE);

// get payment status code & description
// $payment_status_code = $authorization_response->attributes()->code;

$authorization_response1 = $authorization_response['status'];
//dd($authorization_response1);
$authorization_response_code = $authorization_response1['@attributes']['code'];
$authorization_response_string = $authorization_response1['value'];
//dd($authorization_response2);


// get the server from the header
$server_auth = $response;
$server2_auth = $server_auth->getHeader('server');
$server3_auth = $server2_auth[0];

return view('payment',[
           'authorization_response' => $authorization_response,
           'authorize_statusCode' => $authorize_statusCode,
           'server_auth' => $server3_auth,
           'authorization_response_string' => $authorization_response_code .' - '. $authorization_response_string
           




       ]);
   }

     // _____________________________________________________________________________________________________

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        
        $Client_id = $request->input('Client-id');
        $account = $request->input('account');
        $orderNo = $request->input('order-no');
        $amount = $request->input('amount');
        $typeId = $request->input('type-id');
        $currencyId = $request->input('currency-id');
        $countryId = $request->input('country-id');
        $language = $request->input('language');
        $version = $request->input('version');
        $platform = $request->input('platform');
        $phoneCountryId = $request->input('phoneCountryId');
        $operatorId = $request->input('operator-id');
        $phoneNo = $request->input('phone-no');
        $email = $request->input('email');
        $ip = $request->input('ip');

        


        $xml_data = [
            'initialize-payment' => [ 
                '_attributes' => ['account' => $account, 'client-id' => $Client_id], 
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

        

    
    /* 
        $xml_body = '<?xml version="1.0" encoding="UTF-8"?>
            <root>
                <initialize-payment client-id="10100">
                    <transaction>
                        <amount>1000</amount>
                    </transaction>
                    <client-info language="us" version="1.00" platform="HTML5/1.00">
                    </client-info>
                </initialize-payment>
            </root>';
    */

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
        
     


        return view('payment',[
                    'initialize_payment_response' => $initialize_payment_response,
                    'initialize_statusCode' => $initialize_statusCode,
                    'transactionId2' => $transactionId2,
                    'server' => $server3

                ]);

        }


    // _____________________________________________________________________________________________________

/**
* Display the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function show($id)
{
//
}

/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function edit($id)
{
//
}

/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param int $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
//
}

/**
* Remove the specified resource from storage.
*
* @param int $id
* @return \Illuminate\Http\Response
*/
public function destroy($id)
{
//
}
}