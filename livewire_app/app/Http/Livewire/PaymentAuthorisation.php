<?php

namespace App\Http\Livewire;

use Livewire\Component;
use GuzzleHttp\Client;
use Spatie\ArrayToXml\ArrayToXml;

class PaymentAuthorisation extends Component
{   
    public $authorise_payment_response;
    public $server_status_code;
    public $server_auth_name;
    public $authorise_statusCode;
    public $auth_response_string;
    

    public $ClientId = '10100';
    public $account = '101002';

    public $initializeId = '9627164';
    public $amount = '1000';
    public $typeId = '40';
    public $currencyId = '578';
    public $countryId = '102';

    public $cardNumber = '5413330300006005';
    public $cardExpiry = '01/23';
    public $cardTypeId = '7';
    public $cardHolderName = 'Test Jones';
    public $cardCVC = '005';


    public $language = 'us';
    public $version = '1.00';
    public $platform = 'HTML5/1.00';
    public $phoneCountryId ='40';
    public $operatorId ='20000';
    public $phoneNo = '3653503';
    public $email = 'test@cpd.com';
    public $customerRef = 'TestCustomerRef';




    public function render()
    {
        return view('livewire.payment-authorisation');
    }

    public function authorise_payment()
    {

        $xml_data = [
            'authorize-payment' => [ 
                '_attributes' => ['account' => $this->account, 'client-id' => $this->ClientId], 
                'transaction' => [
                    '_attributes' => ['type-id' => $this->typeId, 'id' => $this->initializeId], 
                        'card' => [
                            '_attributes' => ['type-id' => $this->cardTypeId],
                            'amount' => [
                            '_attributes' => ['currency-id' => $this->currencyId, 'country-id' => $this->countryId],
                            '_value' => $this->amount
                            ],
                            'card-number' => $this->cardNumber,
                            'expiry' => $this->cardExpiry,
                            'cvc' => $this->cardCVC,
                            'card-holder-name' => $this->cardHolderName,
                    ],
                ],
                'client-info' => [
                    '_attributes' => ['language' => $this->language, 'version' => $this->version, 'platform' => $this->platform], 
                    'mobile' => [
                        '_attributes' => ['country-id' => $this->phoneCountryId, 'operator-id' => $this->operatorId],
                        '_value' => $this->phoneNo
                    ],
                        'email' => $this->email,
                        'customer-ref' => $this->customerRef
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
    $url = 'https://vy.uat-01.cellpointmobile.net/mpoint/authorize-payment';

    $response = $client->request('POST', $url, [
    'headers' => [
    'Content-Type' => 'text/xml',
    'Authorization' => '$uuid'
    ],
    'auth' => ['vy', 'DEMOisNO_2'],
    'body' => $xml_body
    ]);


// get server response code????
$this->authorise_statusCode = $response->getStatusCode();


$body = $response->getBody()->getContents();
$str = preg_replace('/<([^ ]+) ([^>]*)>([^<>]*)<\/\\1>/i', '<$1 $2><value>$3</value></$1>', $body);
$xml = simplexml_load_string($str);
$transaction_id = 
//$xml = simplexml_load_string($body);
$json = json_encode($xml);
$this->authorise_payment_response = json_decode($json,TRUE);

// get payment status code & description
$authorization_response1 = $this->authorise_payment_response['status'];
$auth_response_code = $authorization_response1['@attributes']['code'];
$auth_response_description = $authorization_response1['value'];
$this->auth_response_string = $auth_response_code .' - '. $auth_response_description;



// get the server from the header
$server_auth = $response;
$server2_auth = $server_auth->getHeader('server');
$this->server_auth_name = $server2_auth[0];

    }
}
