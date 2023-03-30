<?php
namespace Hummingbird\Mod8\Controller\Action;

class View implements \Magento\Framework\App\ActionInterface
{
    protected $pageFactory;
    protected $context;

    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        $this->pageFactory = $pageFactory;
        $this->context= $context;
    }
    public function execute()
    {
        $result= $this->pageFactory->create();
        return $result;
    }
}
