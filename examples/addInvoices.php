<?php

$loader = require __DIR__.'/../vendor/autoload.php';

$obj = new \QBWCServer\applications\AddInvoicesApp([
    'login' => 'Admin',
    'password' => '1',
    'iterator' => null
]);

$xml = '<?xml version="1.0" encoding="utf-8"?>
<?qbxml version="13.0"?>
<QBXML>
<QBXMLMsgsRq onError="stopOnError">
<InvoiceAddRq>
</InvoiceAddRq>
</QBXMLMsgsRq>
</QBXML>';

$response = simplexml_load_string($xml);

$obj->log_this($response);

\QBWCServer\launcher\SoapLauncher::start($obj);