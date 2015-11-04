<?php
namespace QBWCServer\response;

/**
 * Result class for ->closeConnection() SOAP method
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class CloseConnection
{
    /**
     * A message indicating the connection has been closed/update was successful
     *
     * @var string
     */
    public $closeConnectionResult;

    /**
     * Create a new result object
     *
     * @param string $result A message indicating the connection has been closed
     */
    public function __construct($result)
    {
        $this->closeConnectionResult = $result;
    }
}

