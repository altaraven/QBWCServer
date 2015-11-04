<?php
namespace QBWCServer\response;

/**
 * Result container object for the SOAP ->getLastError() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class GetLastError
{
    /**
     * An error message
     *
     * @param string $resp
     */
    public $getLastErrorResult;

    /**
     * Create a new result object
     *
     * @param string $result A message describing the last error that occured
     */
    public function __construct($result)
    {
        $this->getLastErrorResult = $result;
    }
}
