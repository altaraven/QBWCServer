<?php
namespace QBWCServer\response;

/**
 * Result container object for the SOAP ->debug() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class Debug
{
    /**
     * A two element array indicating the result of the call to ->debug()
     *
     * @var array
     */
    public $debug;

    /**
     * Create a new result object
     *
     * @param string $ticket The ticket of the new login session
     * @param string $status The status of the new login session (blank, a company file path, or "nvu" for an invalid login)
     */
    public function __construct($debug)
    {
        $this->debug = $debug;
    }
}

