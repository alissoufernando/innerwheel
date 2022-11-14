<?php
namespace StephaneAss\Payplus\Pay\WithoutRedirect;

use Exception;
use GuzzleHttp\Client;
use StephaneAss\Payplus\Pay;
use StephaneAss\Payplus\Pay\WithRedirect\Checkout\Store;
use StephaneAss\Payplus\Pay\CustomData;
use StephaneAss\Payplus\Pay\Setup;

class Invoice {

    protected $url;
    protected $store;
    protected $setup;
    protected $custom_data;
    protected $otp = "";
    protected $devise = "xof";
    protected $items = array();
    protected $total_amount = 0.0;
    protected $customer_number;

    public function __construct(Store $store, Setup $setup)
    {
        $this->custom_data = new CustomData();
        $this->store = new Store();
        $this->setup = new Setup();
        $this->store->insert($store);
        $this->setup->insert($setup);
        $this->url = "https://app.payplus.africa/pay/v01/straight/checkout-invoice/create";
    }

    public function addCustomData($name,$value) {
        $this->custom_data->set($name,$value);
    }
    
    public function pushCustomData($data=array()) {
        $this->custom_data->push($data);
    }

    public function getCustomData($name) {
        return $this->custom_data->get($name);
    }

    public function showCustomData() {
        return $this->custom_data->show();
    }

    public function setTotalAmount($amount) {
        $this->total_amount = round($amount,2);
    }
    
    public function getTotalAmount() {
        return $this->total_amount;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDevise($devise) {
        $this->devise = $devise;
    }

    public function getDevise() {
        return $this->devise;
    }
    
    public function setCustomerNumber($customer_number) {
        $this->customer_number = $customer_number;
    }

    public function getCustomerNumber() {
        return $this->customer_number;
    }
    
    public function setOtp($otp) {
        $this->otp = $otp;
    }

    public function getOtp() {
        return $this->otp;
    }

    public function addItem($name,$quantity,$price,$totalPrice,$description="") {
        $this->items['item_'.count($this->items)] = array(
          'name' => $name,
          'quantity' => intval($quantity),
          'unit_price' => round($price,2),
          'total_price' => round($totalPrice,2),
          'description' => $description
        );
      }

    public function create() {
        $checkout_payload = array(
          'invoice' => array(
            'items' => $this->items,
            'total_amount' => $this->getTotalAmount(),
            'description' => $this->getDescription(),
            'customer' => $this->getCustomerNumber(),
            'devise' => $this->getDevise(),
            'otp' => $this->getOtp(),
          ),
          'store' => array(
            'name' => $this->store->getName(),
            'website_url' => $this->store->getWebsiteUrl()
          ),
          'custom_data' => $this->showCustomData(),
          'actions' => array(
            'cancel_url' => $this->store->getCancelUrl(),
            'return_url' => $this->store->getReturnUrl(),
            'callback_url' => $this->store->getCallbackUrl()
          )
        );

        return ["commande" => $checkout_payload];
    }

    public function formatPayload($checkout_payload = null)
    {
        $payload = array(
            'headers' => [
                'Apikey' => $this->setup->getApi_key(),
                'Authorization' => 'Bearer '.$this->setup->getToken(),
                'Accept' => 'application/json',
                'Content-type' => 'application/json'
            ],
            'verify' => false,
            'exceptions' => false
        );

        if (!blank($checkout_payload)) {
            $payload = array_merge($payload, [
                'json' => $checkout_payload
            ]);
        }

        return $payload;
    }

    public function launchPaiement()
    {
        $client = new Client([ 'verify' => false]);

        $checkout_payload = $this->create();

        $payload = $this->formatPayload($checkout_payload);

        try{
            $response = $client->request('POST', $this->url, $payload);
            
            return json_decode($response->getBody());

		}catch(Exception $e){
			return [ 
                "success" => false,
                "message" => $e->getMessage()
            ];
		}
    }

    public function confirm($token)
    {
        if (blank($token)) {
            return [ 
                "success" => false,
                "message" => "token must not be empty"
            ];
        }
        $url='https://app.payplus.africa/pay/v01/redirect/checkout-invoice/confirm/?invoiceToken='.$token;

        $client = new Client([ 'verify' => false]);

        $payload = $this->formatPayload();
        
        try{
            $response = $client->request('GET', $url, $payload);
            $response = json_decode($response->getBody());

            return $response;

		}catch(Exception $e){
			return [ 
                "success" => false,
                "message" => $e->getMessage()
            ];
		}
    }
}