<?php

namespace Madgento\EstPay\Model\ResourceModel\Grid;

use Madgento\EstPay\Model\ResourceModel\Keys\Collection as KeyCollection;

class Collection extends KeyCollection
{
    protected function _initSelect()
    {
        parent::_initSelect();
//        $this->addRemoveFilter();
        return $this;
    }
}
