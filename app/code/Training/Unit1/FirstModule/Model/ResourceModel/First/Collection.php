<?php

namespace Unit1\FirstModule\Model\ResourceModel\First;

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
        $this->_init('Unit1\FirstModule\Model\First', 'Unit1\FirstModule\Model\ResourceModel\First');
    }
}
