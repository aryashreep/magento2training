<?php

namespace Mindtree\Helpdesk\Model\ResourceModel\Ticket;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Constructor
     * Configures collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Mindtree\Helpdesk\Model\Ticket', 'Mindtree\Helpdesk\Model\ResourceModel\Ticket');
    }
}
