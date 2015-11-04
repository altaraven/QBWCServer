<?php
namespace QBWCServer\response;

/**
 * Response result for the SOAP ->receiveRequestXML() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class ReceiveResponseXML
{
    /**
     * Integer indicating update progress
     *
     * @var integer
     */
    public $receiveResponseXMLResult;

    /**
     * Create a new ->receiveResponseXML result object
     *
     * @param integer $complete An integer between 0 and 100 indicating the percentage complete this update is *OR* a negative integer indicating an error has occured
     */
    public function __construct($complete)
    {
        $this->receiveResponseXMLResult = $complete;
    }
}
