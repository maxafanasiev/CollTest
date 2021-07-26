<?php
namespace Perspective\CollTest\Block;

use Magento\Backend\App\Action;
use Magento\Framework\View\Element\BlockInterface;


class CollTest3 extends \Magento\Framework\View\Element\Template
{

    protected $customerCollection;

    public function __construct(
        \Magento\Customer\Model\ResourceModel\Customer\CollectionFactory $customerCollection
    )
    {
        $this->customerCollection = $customerCollection;
    }

    public function getAllCustomers()
    {
        return $this->customerCollection->create();
    }


}