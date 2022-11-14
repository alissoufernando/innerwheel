<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests
 */

/**
 * Exception for 414 Request-URI Too Large responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_414 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 414;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request-URI Too Large';
}