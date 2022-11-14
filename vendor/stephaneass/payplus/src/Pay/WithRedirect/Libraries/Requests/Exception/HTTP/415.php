<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests
 */

/**
 * Exception for 415 Unsupported Media Type responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_415 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 415;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Unsupported Media Type';
}