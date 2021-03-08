<?php

namespace Mindtree\Helpdesk\Controller\Adminhtml\Ticket;

class Grid extends \Mindtree\Helpdesk\Controller\Adminhtml\Ticket
{
    public function execute()
    {
        $this->_view->loadLayout(false);
        $this->_view->renderLayout();
    }
}
