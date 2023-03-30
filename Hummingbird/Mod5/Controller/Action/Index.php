<?php
namespace Hummingbird\Mod5\Controller\Action;

use Magento\Framework\Controller\ResultFactory;

class Index implements \Magento\Framework\App\ActionInterface
{
	protected $resultFactory;

	public function __construct(ResultFactory $resultFactory)
	{
        $this->resultFactory = $resultFactory;
	}

	public function execute()
	{
		$result =  $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $result->setContents('Hello World!');
        return $result;
		// $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
		// $url = 'https://shabaz.to/strike-endurance-tee.html';
		// $resultRedirect->setUrl($url);
		// return $resultRedirect;
	}
}