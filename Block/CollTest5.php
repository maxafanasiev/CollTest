<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest5 extends \Magento\Framework\View\Element\Template
{
    protected $orderCollectionFactory;

    public function __construct(
        \Magento\Sales\Model\ResourceModel\Order\CollectionFactory $orderCollectionFactory,
        Template\Context $context,
        array $data = []
    ) {
        $this->orderCollectionFactory = $orderCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getAllOrders()
    {
        return $this->orderCollectionFactory->create()->addFieldToFilter('customer_id', ['eq' => 1])->load();
    }
}

