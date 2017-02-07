<?php
namespace Training\Test\Model;
class Config extends \Magento\Framework\Config\Data implements
    \Training\Test\Model\Config\ConfigInterface
{
    public function __construct(
        \Magento\Framework\Config\CacheInterface $cache,
        \Training\Test\Model\Config\Reader $reader,
        $cacheId = 'training_test_config'
    ) {
        parent::__construct($reader, $cache, $cacheId);
    }
    public function getMyNodeInfo() {
        return $this->get();
    }
}