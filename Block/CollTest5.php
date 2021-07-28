<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest5 extends Template
{
    protected $groupCollectionFactory;

    public function __construct(
        \Magento\Customer\Model\ResourceModel\Group\CollectionFactory $groupCollectionFactory,
        Template\Context $context,
        array $data = []
    ) {
        $this->groupCollectionFactory = $groupCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getAllGroups()
    {
        return $this->groupCollectionFactory->create()->load();
    }
}

