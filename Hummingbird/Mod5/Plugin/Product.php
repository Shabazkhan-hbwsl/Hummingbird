<?php 
namespace Hummingbird\Mod5\Plugin;

class Product{
    public function afterGetPrice(\Magento\Catalog\Model\Product $subject,$result){
        return  $result+=150;
    }
}
?>