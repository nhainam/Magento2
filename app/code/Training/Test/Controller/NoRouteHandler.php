<?php
/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 14/12/2016
 * Time: 17:58
 */

namespace Training\Test\Controller;


class NoRouteHandler implements \Magento\Framework\App\Router\NoRouteHandlerInterface
{
    public function process(\Magento\Framework\App\RequestInterface $request) {
        $moduleName = 'cms';
        $controllerName = 'index';
        $actionName = 'index';
        $request->setModuleName($moduleName)
            ->setControllerName($controllerName)
            ->setActionName($actionName);
        return true;
    }
}