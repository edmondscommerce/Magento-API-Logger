<?php

require_once Mage::getModuleDir('controllers', 'Mage_Api') . DS . 'IndexController.php';

class EdmondsCommerce_LogApi_IndexController
    extends Mage_Api_IndexController
{
    public function indexAction()
    {
        $logger = Mage::helper('edmondscommerce_logapi/log');
        $logger->log($_POST, $logger::API_INDEX);
        parent::indexAction();
    }
}
