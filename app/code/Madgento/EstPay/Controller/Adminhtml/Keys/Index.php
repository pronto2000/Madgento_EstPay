<?php

namespace Madgento\EstPay\Controller\Adminhtml\Keys;

use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Asymmetric Keys'));
        $this->_view->renderLayout();
    }
}
