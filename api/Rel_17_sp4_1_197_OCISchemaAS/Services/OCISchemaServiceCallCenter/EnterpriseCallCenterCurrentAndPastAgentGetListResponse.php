<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the EnterpriseCallCenterCurrentAndPastAgentGetListRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class EnterpriseCallCenterCurrentAndPastAgentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseCallCenterCurrentAndPastAgentGetListResponse';
    protected $agentUserTable;
    protected $deletedAgentUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EnterpriseCallCenterCurrentAndPastAgentGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentUserTable(TableType $agentUserTable = null)
    {
        $this->agentUserTable = $agentUserTable;
        $this->agentUserTable->setElementName('agentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable;
    }

    /**
     * 
     */
    public function setDeletedAgentUserTable(TableType $deletedAgentUserTable = null)
    {
        $this->deletedAgentUserTable = $deletedAgentUserTable;
        $this->deletedAgentUserTable->setElementName('deletedAgentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeletedAgentUserTable()
    {
        return $this->deletedAgentUserTable;
    }
}
