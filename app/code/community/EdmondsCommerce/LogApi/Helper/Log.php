<?php

class EdmondsCommerce_LogApi_Helper_Log
    extends Mage_Core_Helper_Abstract
{
    const LOG_FILE    = 'magento_api_%s.log';

    const API_SOAP    = 'soap';
    const API_V2_SOAP = 'v2_soap';
    const API_XML_RPC = 'xmlrpc';
    const API_INDEX   = 'soap'; // index defaults to SOAP

    public function log($msg, $api)
    {
        Mage::log($msg, null, sprintf(self::LOG_FILE, $api), true);
    }
}