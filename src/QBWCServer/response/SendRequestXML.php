<?php
namespace QBWCServer\response;

/**
 * Response result for the SOAP ->sendRequestXML() method call
 *
 * @package QBWCServer
 * @author Alex Makhorin
 */

class SendRequestXML
{
    /**
     * A QBXML XML request string
     *
     * @var string
     */
    public $sendRequestXMLResult;

    /**
     * Create a new result response
     *
     * @param string $xml The XML request to send to QuickBooks
     */
    public function __construct($xml)
    {
        $this->sendRequestXMLResult = $xml;
    }
}
