<?php

namespace Mindtree\Helpdesk\Controller\Ticket;

class Index extends \Mindtree\Helpdesk\Controller\Ticket
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_PAGE);
        return $resultPage;
    }
}