<?php

namespace Training\Unit4\Model\ResourceModel\unit4;

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
        $this->_init('Training\Unit4\Model\unit4', 'Training\Unit4\Model\ResourceModel\unit4');
    }
}
