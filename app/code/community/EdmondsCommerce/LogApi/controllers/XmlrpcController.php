<?php

require_once Mage::getModuleDir('controllers', 'Mage_Api') . DS . 'XmlrpcController.php';

class EdmondsCommerce_LogApi_XmlrpcController
    extends Mage_Api_XmlrpcController
{
    public function indexAction()
    {
        $logger = Mage::helper('edmondscommerce_logapi/log');
        $logger->log(Mage::app()->getRawBody(), $logger::API_XML_RPC);
        parent::indexAction();
    }
}
