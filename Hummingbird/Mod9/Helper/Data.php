<?php
namespace Hummingbird\Mod9\Helper;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const IS_ENABLED='tab9_id/general/enable';
    const Text='tab9_id/general/text'; 

    protected $scopeConfig;
    
    public function __construct(
        Context $context,
        ScopeConfigInterface $scopeConfig
    )
    {
     parent::__construct($context);
     $this->scopeConfig=$scopeConfig;   
    }
    public function isEnabled(){
        $isEnabled=$this->scopeConfig->getValue(self::IS_ENABLED,ScopeInterface::SCOPE_STORE);
        return $isEnabled;
    }
    public function getDisplayText(){
        $displayText=$this->scopeConfig->getValue(self::Text,ScopeInterface::SCOPE_STORE);
        return $displayText;
    }
}
