<?php
namespace StephaneAss\Payplus\Pay;

use StephaneAss\Payplus\Pay\WithRedirect\Checkout\Invoice;
use StephaneAss\Payplus\Pay\WithoutRedirect\Invoice as WithoutRedirectInvoice;

class PayPlus extends PayPlusConfig{

    public function __construct()
    {
        $this->config();
    }

    public function init()
    {
        if (config("payplus.with_redirect")) {
            return new Invoice($this->store, $this->setup);
        }

        return new WithoutRedirectInvoice($this->store, $this->setup);
    }
}