<?php

/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 15/12/2016
 * Time: 11:31
 */
namespace Training\Test\Controller\Product;

class View
{

    /**
    public function execute() {
    echo "ONE"; exit;
    }
    public function beforeExecute() {
    //echo "BEFORE<BR>"; exit;
    }
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller,
    $result) {
    //echo "AFTER"; exit;
    }
     */
    public function afterExecute(\Magento\Catalog\Controller\Product\View $controller, $result) {
        echo "AFTER"; exit;
    }
}