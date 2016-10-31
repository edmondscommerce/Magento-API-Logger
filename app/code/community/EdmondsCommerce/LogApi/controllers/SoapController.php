<?php

require_once Mage::getModuleDir('controllers', 'Mage_Api') . DS . 'SoapController.php';

class EdmondsCommerce_LogApi_SoapController
    extends Mage_Api_SoapController
{
    public function indexAction()
    {
        $logger = Mage::helper('edmondscommerce_logapi/log');
        $logger->log($this->getRequest()->getRawBody(), $logger::API_SOAP);
        parent::indexAction();
    }
}
