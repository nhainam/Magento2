<?php

namespace Training\SimpleNews\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class News extends AbstractDb
{


    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('news', 'id');
    }


}

