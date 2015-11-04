<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 03.11.2015
 * Time: 14:07
 */

/**
 * http://php.net/manual/ru/simplexmlelement.addchild.php
 */

$loader = require __DIR__.'/../vendor/autoload.php';

$test_array = array (
    'key1' => 'value1',
    'key22' => 'value22',
    'sub_array' => array (
        '@attributes' => [
            'height' => '555',
        ],
        'sub_key1' => 'sub_value1',
    ),
);

$products = [
    0 => [
        'name' => 'Glasses',
        'price' => 299.99
    ],
    1 => [
        'name' => 'Lenses',
        'price' => 99.99
    ],
];

$version = '12.0';

$head = '<?xml version="1.0" encoding="utf-8"?>
         <?qbxml version="' . $version . '"?>
         <QBXML></QBXML>';
$xml = new SimpleXMLElement($head);

//$invoiceLineAdd = $xml->addChild('InvoiceLineAdd');
$invoiceAdd = $xml->addChild('InvoiceAdd');

foreach ($products as $product) {
    $invoiceLineAdd = $invoiceAdd->addChild('InvoiceLineAdd');
    foreach ($product as $key => $value) {
        $invoiceLineAdd->addChild($key, $value);
    }

}


//array_walk_recursive($test_array, array ($xml, 'addChild'));
//
Header('Content-type: text/xml');
print($xml->asXML());

//create XML
//\LSS\Array2XML::init();
//$xml = \LSS\Array2XML::createXML('root_node_name', $test_array);
//echo $xml->saveXML();