<?php
namespace Madgento\EstPay\Block;

use Magento\Backend\Block\Widget\Grid\Container;

class Keys extends Container
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'estpay';
        $this->_blockGroup = 'Madgento_EstPay';
        $this->_addButtonLabel = __('Add New Key');
//        $this->_headerText = __('Messages Inbox');
        parent::_construct();
//        $this->buttonList->remove('add');
    }
}
