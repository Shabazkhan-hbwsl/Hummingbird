<?php
namespace RDI\Area\Plugin\Checkout;

use Magento\Checkout\Block\Checkout\LayoutProcessor as CheckoutLayoutProcessor;

class LayoutProcessor 
{
    public function afterProcess(CheckoutLayoutProcessor $subject,array $jsLayout){
        $customAttributeCode = "address_type";
       
        $customField = [
           'component' => 'Magento_Ui/js/form/element/select',
            'config' => [
        // customScope is used to group elements within a single form (e.g. they can be validated separately)
        'customScope' => 'shippingAddress.custom_attributes',
        'customEntry' => null,
        'template' => 'ui/form/field',
        'elementTmpl' => 'ui/form/element/select',
        'tooltip' => [
            'description' => 'Select the address type?',
        ],
    ],
    'dataScope' => 'shippingAddress.custom_attributes' . '.' . $customAttributeCode,
    'label' => 'Address Type',
    'provider' => 'checkoutProvider',
    'sortOrder' => 0,
    'validation' => [
       'required-entry' => true
    ],

    'options' => [
        [
            'value'=>'res',
            'label'=>'residential'
        ],
        [
            'value'=>'com',
            'label'=>'commercial'
        ]
    ],
    'filterBy' => null,
    'customEntry' => null,
    'visible' => true,
    'value' => 'res' // value field is used to set a default value of the attribute
];

$jsLayout['components']['checkout']['children']['steps']['children']['shipping-step']['children']['shippingAddress']['children']['shipping-address-fieldset']['children'][$customAttributeCode] = $customField;

return $jsLayout;   
    }
}
