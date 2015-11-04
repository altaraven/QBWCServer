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

class AddInvoicesApp extends AbstractQBWCApplication
{

    public function sendRequestXML($object)
    {
//        $requestId = $this->generateGUID();
//		$this->log_this('at last AddInvoicesApp');
        $qbxmlVersion = $this->_config['qbxmlVersion'];

        $xml = '<?xml version="1.0" encoding="utf-8"?>
		<?qbxml version="' . $qbxmlVersion . '"?>
		<QBXML>
			<QBXMLMsgsRq onError="stopOnError">
				<InvoiceAddRq requestID="' . $this->generateGUID() . '">
					<InvoiceAdd>
						<CustomerRef>
							<FullName>Artem</FullName>
						</CustomerRef>
						<RefNumber>Andrey800</RefNumber>
						<Memo>This invoice was created using Alex\'s package!</Memo>
						<InvoiceLineAdd>
							<ItemRef>
								<FullName>Product 2</FullName>
							</ItemRef>
							<Quantity>11</Quantity>
						</InvoiceLineAdd>
						<InvoiceLineAdd>
							<ItemRef>
								<FullName>Product 1</FullName>
							</ItemRef>
							<Quantity>7</Quantity>
						</InvoiceLineAdd>

					</InvoiceAdd>
				</InvoiceAddRq>
			</QBXMLMsgsRq>
		</QBXML>';

        return new SendRequestXML($xml);
    }

    public function receiveResponseXML($object)
    {
//        $response = simplexml_load_string($object->response);
//        $this->log_this($response);

        return new ReceiveResponseXML(100);
    }
}