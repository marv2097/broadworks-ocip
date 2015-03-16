<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemNetworkRoutingServerGetListRequest. The routing Network Server table column
 *         headings are: "Net Address", "Port", "Transport", "Poll", "OpState", "Description".
 */
class SystemNetworkRoutingServerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkRoutingServerGetListResponse';
    protected $networkRoutingServerTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkRoutingServerGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setNetworkRoutingServerTable(TableType $networkRoutingServerTable = null)
    {
        $this->networkRoutingServerTable = $networkRoutingServerTable;
        $this->networkRoutingServerTable->setElementName('networkRoutingServerTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getNetworkRoutingServerTable()
    {
        return $this->networkRoutingServerTable;
    }
}
