<?php
namespace Hummingbird\Mod1\Humage;

use Magento\Catalog\Api\Data\CategoryInterface;

class Test
{
    protected $subject;
    protected $data;
    protected $withString;

    public function __construct(CategoryInterface $subject,
    $data=['this','is','amazing'],
    $withString="shabaz")
    {
      $this->subject=$subject;
      $this->data=$data;
      $this->withString=$withString;  
    }

    public function displayParams(){
      $result = "";
      foreach($this->data as $samar){
        $result = $result . $samar;
      }
      $string=$this->withString .' '. $result;    
      return $string;
    }
}
