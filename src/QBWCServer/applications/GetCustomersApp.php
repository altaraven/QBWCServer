<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 27.10.2015
 * Time: 17:22
 */

namespace QBWCServer\applications;

use QBWCServer\base\AbstractQBWCApplication;
use QBWCServer\response\ReceiveResponseXML,
    QBWCServer\response\SendRequestXML
    ;

class GetCustomersApp extends AbstractQBWCApplication
{

    public function sendRequestXML($object)
    {
        $requestId = $this->generateGUID();
        $qbxmlVersion = $this->_config['qbxmlVersion'];

        $xml = '<?xml version="1.0" encoding="utf-8"?>
                <?qbxml version="' . $qbxmlVersion . '"?>
                <QBXML>
                    <QBXMLMsgsRq onError="stopOnError">
                        <CustomerQueryRq requestID="' . $requestId . '" metaData="NoMetaData">
                            <ActiveStatus>ActiveOnly</ActiveStatus>
                        </CustomerQueryRq>
                    </QBXMLMsgsRq>
                </QBXML>';

        return new SendRequestXML($xml);
    }

    public function receiveResponseXML($object)
    {
        $response = simplexml_load_string($object->response);

//        $iteratorID = trim($response->QBXMLMsgsRs->CustomerQueryRs->attributes()->iteratorID);
//        $iteratorRemainingCount = (int) $response->QBXMLMsgsRs->CustomerQueryRs->attributes()->iteratorRemainingCount;

        $this->log_this($response);

        return new ReceiveResponseXML(100);
    }
}