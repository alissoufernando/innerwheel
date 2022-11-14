<?php
namespace StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

use StephaneAss\Payplus\Pay\WithRedirect\Libraries\Requests\Exception\HTTP;

/**
 * Exception for 404 Not Found responses
 *
 * @package Requests
 */

/**
 * Exception for 404 Not Found responses
 *
 * @package Requests
 */
class Requests_Exception_HTTP_404 extends HTTP {
	/**
	 * HTTP status code
	 *
	 * @var integer
	 */
	protected $code = 404;

	/**
	 * Reason phrase
	 *
	 * @var string
	 */
	protected $reason = 'Not Found';
}