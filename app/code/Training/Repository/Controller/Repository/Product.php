<?php
namespace Training\Repository\Controller\Repository;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\ConfigurableProduct\Model\Product\Type\Configurable as ConfigurableProduct;
use Magento\Framework\Api\Search\SearchCriteriaInterface;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\Api\SearchCriteriaBuilder;
use Magento\Framework\Api\FilterBuilder;
use Magento\Framework\Api\SortOrderBuilder;

class Product extends Action {

    private $productRepository;

    private $searchCriteriaBuilder;

    private $filterBuilder;

    private $sortOrderBuilder;

    public function __construct(
        Context $context,
        ProductRepositoryInterface $productRepository,
        SearchCriteriaBuilder $searchCriteriaBuilder,
        FilterBuilder $filterBuilder,
        SortOrderBuilder $sortOrderBuilder,
        array $data = []
    )
    {
        parent::__construct($context, $data);

        $this->productRepository = $productRepository;
        $this->searchCriteriaBuilder = $searchCriteriaBuilder;
        $this->filterBuilder = $filterBuilder;
        $this->sortOrderBuilder = $sortOrderBuilder;
    }

    public function execute()
    {
        $this->getResponse()->setHeader('Content-Type', 'text/plain');
        $products = $this->getProductsFromRepository();
        foreach ($products as $product) {
            $this->outputProduct($product);
        }
    }

    private function setProductTypeFilter()
    {
        $this->searchCriteriaBuilder->addFilter('type_id', ConfigurableProduct::TYPE_CODE);
    }

    private function setProductNameFilter()
    {
        $this->searchCriteriaBuilder->addFilter('name', 'M%', 'like');
    }

    private function setProductOrder()
    {
        $sortOrder = $this->sortOrderBuilder->setField('entity_id')
            ->setDirection(SearchCriteriaInterface::SORT_ASC)
            ->create();
        $this->searchCriteriaBuilder->addSortOrder($sortOrder);
    }
    private function getProductsFromRepository()
    {
        $this->setProductTypeFilter();
        $this->setProductNameFilter();
        $criteria = $this->searchCriteriaBuilder->create();
        $products = $this->productRepository->getList($criteria);
        return $products->getItems();
    }

    private function setProductOrder()
    {
        $this->searchCriteriaBuilder->addSortOrder();
    }
    private function outputProduct(ProductInterface $product)
    {
        $this->getResponse()->appendBody(sprintf(
                "%s - %s (%d)\n",
                $product->getName(),
                $product->getSku(),
                $product->getId())
        );
    }

}