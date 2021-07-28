<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest7 extends Template
{
    protected $shipConfig;

    public function __construct(
        \Magento\Shipping\Model\Config $shipConfig,
        Template\Context $context,
        array $data = []
    ) {
        $this->shipConfig = $shipConfig;
        parent::__construct($context, $data);
    }

    public function getAllShippingMethods()
    {
        return $this->shipConfig->getAllCarriers();
    }
}

