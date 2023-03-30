<?php
namespace Hummingbird\Mod1\Controller\Action;

use Hummingbird\Mod1\Humage\Test;
use Magento\Framework\Controller\ResultFactory;

class Index implements \Magento\Framework\App\ActionInterface
{
   
    protected $resultFactory;
    protected $test;

    public function __construct(
      ResultFactory $resultFactory,
      Test $test
    )
    {
        $this->resultFactory = $resultFactory;
        $this->test = $test;
    }
    public function execute()
    {
        $result= $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents($this->test->displayParams());
        return $result;
    }
}
