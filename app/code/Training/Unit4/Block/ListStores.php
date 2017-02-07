<?php

/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 03/01/2017
 * Time: 14:01
 */
namespace Training\Unit4\Block;

use Magento\Store\Model\Store;
use Magento\Catalog\Model\Category;
use Magento\Framework\View\Element\Template\Context;

class ListStores extends \Magento\Framework\View\Element\Template
{
    protected $_store;
    protected $_category;

    public function __construct(
        Context $context,
        Store $store,
        Category $category,
        array $data)
    {
        $this->_store = $store;
        $this->_category = $category;
        parent::__construct($context, $data);
    }

    public function getListOrders() {
        $dataStore = $this->_store->getCollection()->getData();
        return $dataStore;
    }

    public function getRootCategoryID() {
        $stores = $this->_store
            ->getCollection()
            ->join('store_group', 'store_group.group_id=main_table.group_id', 'store_group.root_category_id')
            ->getData();
        $keyIDs = [];
        foreach($stores as $store) {
            array_push($keyIDs, $store['root_category_id']);
        }
        return $keyIDs;
    }

    public function getListCategories($keyIDs) {
        $categories = $this->_category
            ->getCollection()
            ->addFieldToSelect('name')
            ->addFieldToFilter('parent_id', $keyIDs);
        return $categories;
    }
}