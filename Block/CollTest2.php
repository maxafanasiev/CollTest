<?php
namespace Perspective\CollTest\Block;

use Magento\Catalog\Helper\Image;

class CollTest2 extends \Magento\Framework\View\Element\Template
{
    protected $_productCollectionFactory;
    protected $_productImageHelper;

    public function __construct(
        Image $productImageHelper,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Backend\Block\Template\Context $context,
        array $data = []
    )
    {
        $this->_productImageHelper=$productImageHelper;
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        return $this->_productCollectionFactory->create()->addAttributeToSelect('*')->setPageSize(10);
    }

    public function getImageOriginalHeight($product, $imageId, $attributes = [])
    {
        return $this->_productImageHelper->init($product, $imageId, $attributes)->getHeight();
    }

    public function getImageOriginalWidth($product, $imageId, $attributes = [])
    {
        return $this->_productImageHelper->init($product, $imageId, $attributes)->getWidth();
    }

    public function getImageUrl($product, $imageId, $attributes = [])
    {
        return $this->_productImageHelper->init($product, $imageId, $attributes)->getUrl();
    }

}