<?php

namespace AHT\HelloWorld\Block\Adminhtml;

use Magento\Backend\Block\Widget\Grid\Container;

class Subscription extends Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'AHT_HelloWorld';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}
