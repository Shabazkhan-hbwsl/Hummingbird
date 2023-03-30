<?php

namespace Hummingbird\Mod6\Block;

class Index extends \Magento\Framework\View\Element\AbstractBlock
{
 protected function _toHtml()
 {
 return "<b>with_html loaded!!!!!!!!!!!!!</b>";
 }
 protected function _afterToHtml($tohtml)
 {
 return parent::_afterToHtml($tohtml);
 }
} 