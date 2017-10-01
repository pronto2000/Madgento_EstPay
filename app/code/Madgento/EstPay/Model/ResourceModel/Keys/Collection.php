<?php

namespace Madgento\EstPay\Model\ResourceModel\Keys;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Madgento\EstPay\Model\Keys;

class Collection extends AbstractCollection
{
    /**
     * Resource collection initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Magento\AdminNotification\Model\Inbox::class,
            \Magento\AdminNotification\Model\ResourceModel\Inbox::class
        );
    }

//    /**
//     * Add remove filter
//     *
//     * @return $this
//     */
//    public function addRemoveFilter()
//    {
//        $this->getSelect()->where('is_remove=?', 0);
//        return $this;
//    }
}
