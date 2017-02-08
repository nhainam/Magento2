<?php

namespace Training\SimpleNews\Model\ResourceModel\News;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('Training\SimpleNews\Model\News', 'Training\SimpleNews\Model\ResourceModel\News');
    }

}
