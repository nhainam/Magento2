<?php

namespace Unit1\FirstModule\Model;

use \Magento\Framework\Model\AbstractModel;

class First extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Unit1\FirstModule\Model\ResourceModel\First');
    }


}

