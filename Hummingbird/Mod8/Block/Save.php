<?php
namespace Hummingbird\Mod8\Block;

use Hummingbird\Mod8\Model\ResourceModel\Employee\Collection;
use Magento\Framework\View\Element\Template;

class Save extends Template
{
    private $collection;
    public function __construct(
        Template\Context $context,
        Collection $collection
    )
    {
        $this->collection = $collection;
        parent::__construct($context);
    }

    public function getAllEmployees()
    {
        return $this->collection;
    }

    public function getPostUrl()
    {
        return $this->getUrl('mod8/action/save');
    }

}
