<?php

namespace Hummingbird\Mod2\Plugins;

class Footer extends \Magento\Theme\Block\Html\Footer
{
    public function afterGetCopyright()
    {
        return  "Welcome!!";
    }
}