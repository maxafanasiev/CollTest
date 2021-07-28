<?php

namespace Perspective\CollTest\Block;

use Magento\Framework\View\Element\Template;

class CollTest6 extends Template
{
    protected $paymentHelper;

    public function __construct(
        \Magento\Payment\Helper\Data $paymentHelper,
        Template\Context $context,
        array $data = []
    ) {
        $this->paymentHelper = $paymentHelper;
        parent::__construct($context, $data);
    }

    public function getAllPaymentMethods()
    {
        return $this->paymentHelper->getPaymentMethodList();
    }
}

