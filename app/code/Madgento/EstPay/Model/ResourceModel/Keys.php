<?php

namespace Madgento\EstPay\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Keys extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('madgento_keys', 'key_id');
    }
}
