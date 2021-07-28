<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest4 extends \Magento\Framework\View\Element\Template
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

    public function getAllOrders($customerId)
    {
        return $this->orderCollectionFactory->create($customerId)->load();
    }
}

