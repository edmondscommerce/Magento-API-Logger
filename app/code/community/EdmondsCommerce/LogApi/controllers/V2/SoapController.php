<?php

require_once Mage::getModuleDir('controllers', 'Mage_Api') . DS . 'V2' . DS . 'SoapController.php';

class EdmondsCommerce_LogApi_V2_SoapController
    extends Mage_Api_V2_SoapController
{
    public function indexAction()
    {
        $logger = Mage::helper('edmondscommerce_logapi/log');
        $logger->log($this->getRequest()->getRawBody(), $logger::API_V2_SOAP);
        parent::indexAction();
    }
}