<?php
namespace Hummingbird\Mod7\Block;

class Message extends \Magento\Framework\View\Element\Template
{
   
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context) {
        parent::__construct($context);
    }
    public function getDisplay(){
        return __('20% discount is On');
    }
    public function _afterToHtml($html){
        return parent::_afterToHtml($html."<h5>Message from after to html method</h5>");
    }
   
}
