<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupOfficeZoneGetAssignedListRequest.
 *         Contains a table of all Office Zones assigned to the
 *         group. The column headings are: "Name", "Description" and "Default".
 */
class GroupOfficeZoneGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupOfficeZoneGetAssignedListResponse';
    protected $officeZoneTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupOfficeZoneGetAssignedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOfficeZoneTable(TableType $officeZoneTable = null)
    {
        $this->officeZoneTable = $officeZoneTable;
        $this->officeZoneTable->setElementName('officeZoneTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getOfficeZoneTable()
    {
        return $this->officeZoneTable;
    }
}
