<?php

namespace Training\SimpleNews\Model;

use \Magento\Framework\Model\AbstractModel;

class News extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Training\SimpleNews\Model\ResourceModel\News');
    }


}

