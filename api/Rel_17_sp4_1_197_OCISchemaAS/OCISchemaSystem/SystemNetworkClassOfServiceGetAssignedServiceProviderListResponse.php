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
 * Response to the
 *         SystemNetworkClassOfServiceGetAssignedServiceProviderListRequest.
 *         The response contains a table of all Service Providers that have
 *         the given Network Class of Service assigned. The column headings are
 *         "Service Provider Id", "Service Provider Name" and "Is Enterprise".
 */
class SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse';
    protected $serviceProviderTable = null;

    /**
     * @return SystemNetworkClassOfServiceGetAssignedServiceProviderListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderTable(TableType $serviceProviderTable = null)
    {
        if (!$serviceProviderTable) return $this;
        $this->serviceProviderTable = $serviceProviderTable;
        $this->serviceProviderTable->setName('serviceProviderTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServiceProviderTable()
    {
        return $this->serviceProviderTable;
    }
}
