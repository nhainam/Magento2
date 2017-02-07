<?php

/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 16/12/2016
 * Time: 13:50
 */
namespace Training\Test\Controller\Block;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute() {
        $layout = $this->_view->getLayout();
        $block = $layout->createBlock('Training\Test\Block\Test');
        $this->getResponse()->appendBody($block->toHtml());

        $block = $this->_view
            ->getLayout()
            ->createBlock('Magento\Framework\View\Element\Text')
            ->setText("Hello world from text block !");
        $this->getResponse()->appendBody($block->toHtml());
    }
}