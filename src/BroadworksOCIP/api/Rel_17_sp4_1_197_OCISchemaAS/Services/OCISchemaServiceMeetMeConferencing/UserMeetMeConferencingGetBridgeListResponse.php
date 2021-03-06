<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserMeetMeConferencingGetBridgeListRequest.
 *         Contains a table with column headings: "Bridge Id", "Name", "Phone Number", "Extension", "Ports", and "Is Active"
 *         The column values for "Is Active" can either be true, or false.
 */
class UserMeetMeConferencingGetBridgeListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserMeetMeConferencingGetBridgeListResponse';
    protected $conferenceBridgeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\UserMeetMeConferencingGetBridgeListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceBridgeTable(TableType $conferenceBridgeTable = null)
    {
        $this->conferenceBridgeTable = $conferenceBridgeTable;
        $this->conferenceBridgeTable->setElementName('conferenceBridgeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceBridgeTable()
    {
        return $this->conferenceBridgeTable;
    }
}
