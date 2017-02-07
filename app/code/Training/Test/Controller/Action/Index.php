<?php
/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 15/12/2016
 * Time: 11:29
 */

namespace Training\Test\Controller\Action;


class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() { echo 1;die;
        $block = $this->_view->getLayout()->createBlock('Training\Test\Block\Test');
        $block->setTemplate('test.phtml');
        $this->getResponse()->appendBody($block->toHtml());
    }
}