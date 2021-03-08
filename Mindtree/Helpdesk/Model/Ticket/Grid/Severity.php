<?php

namespace Mindtree\Helpdesk\Model\Ticket\Grid;

class Severity implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return \Mindtree\Helpdesk\Model\Ticket::getSeveritiesOptionArray();
    }
}
