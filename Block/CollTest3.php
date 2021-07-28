<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest3 extends \Magento\Framework\View\Element\Template
{
    protected $customerCollectionFactory;

    public function __construct(
        \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollectionFactory,
         Template\Context $context,
         array $data = []
    ) {
        $this->customerCollectionFactory = $customerCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getAllCustomers()
    {
        return $this->customerCollectionFactory->create()->load();
    }
}

