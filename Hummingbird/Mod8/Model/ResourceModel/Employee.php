<?php

namespace Hummingbird\Mod8\Model\ResourceModel;

class Employee extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
   const TABLE_NAME='employee_table';
   const ID='employee_id';
    protected function _construct()
    {
        $this->_init(self::TABLE_NAME,self::ID);
    }
}
