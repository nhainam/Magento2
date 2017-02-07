<?php

namespace Training\Unit4\Observer;

use Magento\Framework\Event\ObserverInterface;

class Productsaveafter implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $_product_id = $observer->getProduct()->getId();  // you will get product object
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('Psr\Log\LoggerInterface');
        $logger->info("Logging ProductID: ".$_product_id);
    }
}