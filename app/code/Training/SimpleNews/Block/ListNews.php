<?php

/**
 * Created by PhpStorm.
 * User: hainam
 * Date: 03/01/2017
 * Time: 14:01
 */
namespace Training\SimpleNews\Block;

use Training\SimpleNews\Model\NewsFactory;
use Magento\Framework\View\Element\Template\Context;

class ListNews extends \Magento\Framework\View\Element\Template
{
    private $_newsFactory;

    public function __construct(
        Context $context,
        NewsFactory $newsFactory,
        array $data)
    {
        $this->_newsFactory = $newsFactory;
        parent::__construct($context, $data);
    }

    protected function _construct()
    {
        parent::_construct();
        $collection = $this->_newsFactory->create()
            ->getCollection()
            ->setOrder('id', 'DESC');
        $this->setCollection($collection);
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $pager = $this->getLayout()->createBlock(
            'Magento\Theme\Block\Html\Pager',
            'simplenews.news.list.pager'
        );
        $pager->setLimit(5)
            ->setShowAmounts(false)
            ->setCollection($this->getCollection());
        $this->setChild('pager', $pager);
        $this->getCollection()->load();
        return $this;
    }
}