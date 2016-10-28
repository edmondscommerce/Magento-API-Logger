# Magento-API-Logger #

A Magento module for logging Magento API calls.

# Install #

Copy app/ into the root Magento folder.

# Usage #

You simply need to add your custom logging code to whichever API controller you're interested in
(I've added some basic $_POST logging to get you started).


```
app/code/community/EdmondsCommerce/LogApi/controllers/*
```
```php
public function indexAction()
{
    // Your custom logging code here
    $logger = Mage::helper('edmondscommerce_logapi/log');
    $logger->log($_POST, $logger::API_V2_SOAP);
    // End
    parent::indexAction();
}
```
