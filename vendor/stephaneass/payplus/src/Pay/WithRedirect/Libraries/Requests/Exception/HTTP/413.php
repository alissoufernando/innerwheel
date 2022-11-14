<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 413 Request Entity Too Large responses
 *
 * @package Requests
 */

/**
 * Exception for 413 Request Entity Too Large responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_413 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 413;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Request Entity Too Large';
}