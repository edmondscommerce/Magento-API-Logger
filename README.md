# Magento-API-Logger #
## By [Edmonds Commerce](https://www.edmondscommerce.co.uk) ##

A Magento module for logging Magento API calls.

### Installation ###

Copy app/ into the root Magento folder.

### Usage ###

Simply add your custom logging code to whichever API controller you're
interested in (we've added some basic logging to get you started).


```
app/code/community/EdmondsCommerce/LogApi/controllers/*
```
```php
public function indexAction()
{
    // Your custom logging code here
    $logger = Mage::helper('edmondscommerce_logapi/log');
    $logger->log($this->getRequest()->getRawBody(), $logger::API_V2_SOAP);
    // End
    parent::indexAction();
}
```
