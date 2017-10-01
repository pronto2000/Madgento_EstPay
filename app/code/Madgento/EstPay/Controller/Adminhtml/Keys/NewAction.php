<?php

namespace Madgento\EstPay\Controller\Adminhtml\Keys;

use Magento\Backend\App\Action;

class NewAction extends Action
{
    public function execute()
    {
        $this->_forward('index');
    }
}
