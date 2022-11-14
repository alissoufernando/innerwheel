<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests
 */

/**
 * Exception for 402 Payment Required responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_402 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 402;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Payment Required';
}