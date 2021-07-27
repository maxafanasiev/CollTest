<?php
namespace Perspective\CollTest\Block;

class CollTest3 extends \Magento\Framework\View\Element\Template
{
    protected $customerCollection;

    public function __construct(
       \Magento\Customer\CustomerData\Customer $customerCollection
    )
    {
        $this->customerCollection = $customerCollection;
    }

    public function getAllCustomers()
    {
        return $this->customerCollection->create();


    }
}