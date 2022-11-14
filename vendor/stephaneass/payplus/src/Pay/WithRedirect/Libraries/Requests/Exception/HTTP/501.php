<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 501 Not Implemented responses
 *
 * @package Requests
 */

/**
 * Exception for 501 Not Implemented responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_501 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 501;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Implemented';
}