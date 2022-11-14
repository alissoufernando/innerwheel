<?php
namespace StephaneAss\Payplus;

use StephaneAss\Payplus\Pay\Setup;
use StephaneAss\Payplus\Pay\CustomData;
use StephaneAss\Payplus\Pay\Checkout;
use StephaneAss\Payplus\Pay\Checkout\Invoice;
use StephaneAss\Payplus\Pay\Checkout\Store;
use StephaneAss\Payplus\Pay\Libraries\Requests;
use StephaneAss\Payplus\Pay\Utilities;

//require_once("pay/dependency_check.php");

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__)));

abstract class Pay {
  const VERSION = "1.0.0";
  const SUCCESS = "success";
  const FAIL = "fail";
  const PENDING = "pending";
}

if (strnatcmp(phpversion(),'5.3.0') >= 0) {
  define('JSON_ENCODE_PARAM_SUPPORT',   true);
}else{
  define('JSON_ENCODE_PARAM_SUPPORT',   false);
}