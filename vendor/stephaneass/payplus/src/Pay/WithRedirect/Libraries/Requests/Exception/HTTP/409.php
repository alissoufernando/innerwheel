<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 409 Conflict responses
 *
 * @package Requests
 */

/**
 * Exception for 409 Conflict responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_409 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 409;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Conflict';
}