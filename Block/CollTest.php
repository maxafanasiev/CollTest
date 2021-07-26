<?php
namespace Perspective\CollTest\Block;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Model\CategoryFactory;

class CollTest extends \Magento\Framework\View\Element\Template
{
    protected $productCollectionFactory;
    protected $categoryFactory;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        CategoryFactory $categoryFactory,
        array $data = []
    )
    {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        $categories = [23];
        $collection = $this->productCollectionFactory->create();
        $collection->addAttributeToSelect('*')->addCategoriesFilter(['in' => $categories])->addAttributeToFilter(ProductInterface::PRICE, ['lt' => 60]);
        return $collection;
    }


}