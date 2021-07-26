<?php
namespace Perspective\CollTest\Block;

use Magento\Catalog\Model\ProductRender;

class CollTest1 extends \Magento\Framework\View\Element\Template
{
    protected $_productCollectionFactory;
    protected $_stockItemRepository;

    public function __construct(
        \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository,
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        array $data = []
    )
    {

        $this->_stockItemRepository = $stockItemRepository;
        $this->_productCollectionFactory = $productCollectionFactory;
        parent::__construct($context, $data);
    }

    public function getProductCollection()
    {
        return $this->_productCollectionFactory->create()->addAttributeToSelect('*')->setPageSize(50);
    }

    public function getStockInformation($productId)
    {
    $productStockInfo = $this->_stockItemRepository->get($productId);
    return $productStockInfo;
    }

}