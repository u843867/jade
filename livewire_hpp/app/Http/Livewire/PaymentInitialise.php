<?php

//  this is the controller for the payment-initialise component 

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;
use Spatie\ArrayToXml\ArrayToXml;

class PaymentInitialise extends Component


{
    public $initialize_payment_response;
    public $server;
    public $initialize_statusCode;
    public $transactionId;

    
    public $ClientId = '10100';
    public $account = '101002';
    public $orderNo =  'QHWJEJ';
    public $amount = '1000';
    public $typeId = '40';
    public $currencyId = '578';
    public $countryId = '102';
    public $language = 'us';
    public $version = '1.00';
    public $platform = 'HTML5/1.00';
    public $phoneCountryId ='40';
    public $operatorId ='20000';
    public $phoneNo = '3653503';
    public $email = 'test@cpd.com';
    public $ip = '123.252.238.186';

       

    public function render()
    {
        return view('livewire.payment-initialise');
    }

    public function initialise_payment()
    {
        $xml_data = [
            'initialize-payment' => [ 
                '_attributes' => ['account' => $this->account, 'client-id' => $this->ClientId], 
                'transaction' => [
                    '_attributes' => ['order-no' => $this->orderNo, 'type-id' => $this->typeId], 
                        'amount' => [
                            '_attributes' => ['currency-id' => $this->currencyId, 'country-id' => $this->countryId],
                            '_value' => $this->amount],
                ],
                'client-info' => [
                    '_attributes' => ['language' => $this->language, 'version' => $this->version, 'platform' => $this->platform], 
                    'mobile' => [
                        '_attributes' => ['country-id' => $this->phoneCountryId, 'operator-id' => $this->operatorId],
                        '_value' => $this->phoneNo
                    ],
                        'email' => $this->email,
                        'ip' => $this->ip
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

   

        $body = $response->getBody()->getContents();
        $xml = simplexml_load_string($body);       
              

        $str = preg_replace('/<([^ ]+) ([^>]*)>([^<>]*)<\/\\1>/i', '<$1 $2><value>$3</value></$1>', $body);
        $xmlFull = simplexml_load_string($str);
        $json = json_encode($xmlFull);
        $this->initialize_payment_response = json_decode($json,TRUE);
        
        

        // get the server from the header
        $server1 = $response;
        $server2 = $server1->getHeader('server');
        $this->server = $server2[0];

        // get the server response code
        $this->initialize_statusCode = $response->getStatusCode();

        // get transaction ID from the response
        $transactionId1 = $xml->transaction;
        $transactionId2 = (array) $transactionId1->attributes()['id'];
        $this->transactionId = $transactionId2['0'];
        
        
    }

     
}
