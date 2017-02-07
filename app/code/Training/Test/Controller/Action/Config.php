<?php
/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 09/12/2016
 * Time: 15:20
 */

namespace Training\Test\Controller\Action;


class Config extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $testConfig = $this->_objectManager->get('Training\Test\Model\Config\ConfigInterface');
        $myNodeInfo = $testConfig->getMyNodeInfo();
        if (is_array($myNodeInfo)) {
            foreach($myNodeInfo as $str) {
                $this->getResponse()->appendBody($str . "<BR>");
            }
        }
    }
}