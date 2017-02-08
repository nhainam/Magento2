<?php
 
namespace Training\SimpleNews\Controller\Adminhtml\News;
 
use Training\SimpleNews\Controller\Adminhtml\News;
 
class Grid extends News
{
   /**
     * @return void
     */
   public function execute()
   {
      return $this->_resultPageFactory->create();
   }
}