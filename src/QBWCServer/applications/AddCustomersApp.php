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
    QBWCServer\response\SendRequestXML;

class AddCustomersApp extends AbstractQBWCApplication
{

    public function sendRequestXML($object)
    {
//        $requestId = $this->generateGUID();
        $qbxmlVersion = $this->_config['qbxmlVersion'];

        $xml = '<?xml version="1.0" encoding="utf-8"?>
		<?qbxml version="' . $qbxmlVersion . '"?>
		<QBXML>
			<QBXMLMsgsRq onError="stopOnError">
				<CustomerAddRq requestID="' . $this->generateGUID() . '">
					<CustomerAdd>
						<Name>Test Customer (' . mt_rand() . ')</Name>
						<CompanyName>ConsoliBYTE, LLC</CompanyName>
						<FirstName>Added</FirstName>
						<LastName>Today</LastName>
						<BillAddress>
							<Addr1>ConsoliBYTE, LLC</Addr1>
							<Addr2>134 Stonemill Road</Addr2>
							<City>Mansfield</City>
							<State>CT</State>
							<PostalCode>06268</PostalCode>
							<Country>United States</Country>
						</BillAddress>
						<Phone>860-634-1602</Phone>
						<AltPhone>860-429-0021</AltPhone>
						<Fax>860-429-5183</Fax>
						<Email>Keith@ConsoliBYTE.com</Email>
						<Contact>Keith Palmer</Contact>
					</CustomerAdd>
				</CustomerAddRq>
                <CustomerAddRq requestID="' . $this->generateGUID() . '">
					<CustomerAdd>
						<Name>Test Customer (' . mt_rand() . ')</Name>
						<CompanyName>ConsoliBYTE, LLC</CompanyName>
						<FirstName>Added</FirstName>
						<LastName>Today</LastName>
						<BillAddress>
							<Addr1>ConsoliBYTE, LLC</Addr1>
							<Addr2>134 Stonemill Road</Addr2>
							<City>Mansfield</City>
							<State>CT</State>
							<PostalCode>06268</PostalCode>
							<Country>United States</Country>
						</BillAddress>
						<Phone>860-634-1602</Phone>
						<AltPhone>860-429-0021</AltPhone>
						<Fax>860-429-5183</Fax>
						<Email>Keith@ConsoliBYTE.com</Email>
						<Contact>Keith Palmer</Contact>
					</CustomerAdd>
				</CustomerAddRq>
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