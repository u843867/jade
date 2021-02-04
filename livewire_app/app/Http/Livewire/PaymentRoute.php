<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;
use Spatie\ArrayToXml\ArrayToXml;

class PaymentRoute extends Component
{
    public function render()
    {
        return view('livewire.payment-route');
    }

    public $serverNameRoute;
    public $routeServerCode;
    public $pay_response;


    public $ClientId = '10100';
    public $account = '101002';
    public $storedCard = true;
    public $initializeId = '9627164';
    public $typeId = '7';
    public $currencyId = '578';
    public $countryId = '102';
    public $amount = '1000';
    public $language = 'us';
    public $version = '1.00';
    public $platform ='HTML5/1.00';
    public $phoneCountryId = '40';
    public $operatorId = '20000';
    public $phoneNo = '3653503';
    public $email = 'test@cpd.com';
    public $ip = '123.252.238.186';

    public function route_payment()
    {
    
    $xml_data = [
        'pay' => [ 
            '_attributes' => ['account' => $this->account, 'client-id' => $this->ClientId], 
            'transaction' => [
                '_attributes' => ['store-card' => $this->storedCard, 'id' => $this->initializeId], 
                    'card' => [
                        '_attributes' => ['type-id' => $this->typeId],
                        'amount' => [
                        '_attributes' => ['currency-id' => $this->currencyId, 'country-id' => $this->countryId],
                        '_value' => $this->amount
                        ],
                ],
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
    
    
             
        
    
        
        
    
        $body = $response->getBody()->getContents();
        $xml = simplexml_load_string($body);
        $json = json_encode($xml);
        $this->pay_response = json_decode($json,TRUE);
    
        // get the server name from the header
        $server = $response;
        $server2 = $server->getHeader('server');
        $this->serverNameRoute = $server2[0];

        //get server status code
        $this->routeServerCode = $response->getStatusCode();


    }

}