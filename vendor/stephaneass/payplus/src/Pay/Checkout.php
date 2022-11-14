<?php
namespace StephaneAss\Payplus\Pay;

use StephaneAss\Payplus\Pay;

class Checkout extends Pay {
  public $status;
  public $response_code;
  public $response_text;
  public $transaction_id;
  public $description;
  public $token;
}