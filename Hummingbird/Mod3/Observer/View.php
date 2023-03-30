<?php

namespace Hummingbird\Mod3\Observer;
use \Magento\Framework\Event\ObserverInterface;

class View implements ObserverInterface
{

 private $_logger;

 public function __construct(
 \Psr\Log\LoggerInterface $logger)
 {
 $this->_logger = $logger;
 }
 public function execute(\Magento\Framework\Event\Observer $observer) {
   $productvisited= $observer->getProduct()->getName();
   $this->_logger->info('The product visited was :' . $productvisited);
}
}