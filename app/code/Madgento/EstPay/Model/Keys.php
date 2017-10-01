<?php

namespace Madgento\EstPay\Model;

use  Magento\Framework\Model\AbstractModel;
use Madgento\EstPay\Model\ResourceModel\Keys as ResourceKeys;

class Keys extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceKeys::class);
    }
}
