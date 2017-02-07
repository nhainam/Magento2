<?php

namespace Training\Unit4\Model;

use \Magento\Framework\Model\AbstractModel;

class unit4 extends AbstractModel
{


    /**
     * Initialize resource model
     * @return void
     */
    public function _construct()
    {
        $this->_init('Training\Unit4\Model\ResourceModel\unit4');
    }


}

