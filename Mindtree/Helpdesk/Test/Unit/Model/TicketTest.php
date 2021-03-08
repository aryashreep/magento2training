<?php

namespace Mindtree\Helpdesk\Test\Unit\Model;

class TicketTest extends \PHPUnit_Framework_TestCase
{
    protected $objectManager;
    protected $ticket;

    public function setUp()
    {
        $this->objectManager = new \Magento\Framework\TestFramework\Unit\Helper\ObjectManager($this);
        $this->ticket = $this->objectManager->getObject('Mindtree\Helpdesk\Model\Ticket');
    }

    public function testGetSeveritiesOptionArray()
    {
        $this->assertNotEmpty(\Mindtree\Helpdesk\Model\Ticket::getSeveritiesOptionArray());
    }

    public function testGetStatusesOptionArray()
    {
        $this->assertNotEmpty(\Mindtree\Helpdesk\Model\Ticket::getStatusesOptionArray());
    }

    public function testGetStatusAsLabel()
    {
        $this->ticket->setStatus(\Mindtree\Helpdesk\Model\Ticket::STATUS_CLOSED);

        $this->assertEquals(
            \Mindtree\Helpdesk\Model\Ticket::$statusesOptions[\Mindtree\Helpdesk\Model\Ticket::STATUS_CLOSED],
            $this->ticket->getStatusAsLabel()
        );
    }

    public function testGetSeverityAsLabel()
    {
        $this->ticket->setSeverity(\Mindtree\Helpdesk\Model\Ticket::SEVERITY_MEDIUM);

        $this->assertEquals(
            \Mindtree\Helpdesk\Model\Ticket::$severitiesOptions[\Mindtree\Helpdesk\Model\Ticket::SEVERITY_MEDIUM],
            $this->ticket->getSeverityAsLabel()
        );
    }
}
