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
 * Response to SystemAccessDeviceGetListRequest14.
 *         Contains a table of devices defined at the System-level.
 *         The column headings are:
 *         "Device Name", "Device Type", "Available Ports", "Net Address" and "MAC Address", "Status".
 */
class SystemAccessDeviceGetListResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceGetListResponse14';
    protected $accessDeviceTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetListResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDeviceTable(TableType $accessDeviceTable = null)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        $this->accessDeviceTable->setElementName('accessDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable;
    }
}
