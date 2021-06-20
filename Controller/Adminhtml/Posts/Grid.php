<?php

namespace AHT\HelloWorld\Controller\Adminhtml\Posts;

use AHT\HelloWorld\Controller\Adminhtml\Posts;

class Grid extends Posts
{
    public function execute()
    {
        return $this->_resultPageFactory->create();
    }
}
