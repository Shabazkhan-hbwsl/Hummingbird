<?php
namespace Hummingbird\Mod8\Controller\Action;

use Hummingbird\Mod8\Model\ResourceModel\Employee as EmployeeResourceModel;
use Hummingbird\Mod8\Model\Employee;

class Save extends \Magento\Framework\App\Action\Action
{
    private $employee;
    private $employeeResourceModel;
  
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       Employee $employee,
       EmployeeResourceModel $employeeResourceModel  
    )
    {
        $this->employee = $employee;
        $this->employeeResourceModel = $employeeResourceModel;
        parent::__construct($context);
    }
    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $employee = $this->employee->setData($params);
        try{
            $this->employeeResourceModel->save($employee);
            $this->messageManager->addSuccessMessage(__("Successfully added the Employee %1",$params["first_name"]));
        }catch(\Exception $e){
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath("mod8/action/view");
        return $redirect;
    }
}
