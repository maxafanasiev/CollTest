<?php
namespace Perspective\CollTest\Block;

class CollTest3 extends \Magento\Framework\View\Element\Template
{
    protected $customerCollectionFactory;

    public function __construct(
       \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory,
       \Magento\Backend\Block\Template\Context $context,
       array $data = [])
    {
        $this->customerCollectionFactory = $customerCollectionFactory;
    }

    public function getAllCustomers()
    {
        $collection = $this->customerCollectionFactory->create()->load();
    return $collection;
    }
}

