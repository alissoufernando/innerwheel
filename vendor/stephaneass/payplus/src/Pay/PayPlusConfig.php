<?php
namespace StephaneAss\Payplus\Pay;

use StephaneAss\Payplus\Pay\WithRedirect\Checkout\Store;

class PayPlusConfig{
    
    public $setup;

    public $store;

    public function config()
    {
        $this->setup = new Setup();
        $this->setup->setApi_key(config("payplus.api_key"));
        $this->setup->setMode(config("payplus.mode"));
        $this->setup->setToken(config("payplus.token"));

        //Configuration des informations de votre boutique/service
        $this->store = new Store();
        $this->store->setName(config("payplus.application_name"));
        $this->store->setWebsiteUrl(config("payplus.application_website_url"));
        $this->store->setCancelUrl(config("payplus.application_cancel_url"));
        $this->store->setCallbackUrl(config("payplus.application_callback_url"));
        $this->store->setReturnUrl(config("payplus.application_return_url"));
    }

}