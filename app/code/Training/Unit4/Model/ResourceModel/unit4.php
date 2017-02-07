<?php

namespace Training\Unit4\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class unit4 extends AbstractDb
{


    /**
     * Initialize resource
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('unit4', 'unit4_');
    }


}

