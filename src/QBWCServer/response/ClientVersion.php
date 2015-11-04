<?php
namespace QBWCServer\response;

/**
 * Result container object for the SOAP ->clientVersion() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class ClientVersion
{
    /**
     * Client version response string (empty string, E:..., W:..., or O:...
     *
     * @var string    The response string
     */
    public $clientVersionResult;

    /**
     * Create a new result object
     *
     * @param string $response The response string
     */
    public function __construct($response)
    {
        $this->clientVersionResult = $response;
    }
}
