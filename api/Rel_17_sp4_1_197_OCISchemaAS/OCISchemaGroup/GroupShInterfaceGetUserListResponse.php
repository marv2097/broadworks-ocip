<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\ShInterfaceUserListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupShInterfaceGetUserListRequest.
 *         The response contains the Sh Non Transparent data and associated Public User Identity
 *         information for every Public User Identity in the group.
 */
class GroupShInterfaceGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupShInterfaceGetUserListResponse';
    protected $entry;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupShInterfaceGetUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEntry(ShInterfaceUserListEntry $entry = null)
    {
        $this->entry = ($entry InstanceOf ShInterfaceUserListEntry)
             ? $entry
             : new ShInterfaceUserListEntry($entry);
        $this->entry->setElementName('entry');
        return $this;
    }

    /**
     * 
     * @return ShInterfaceUserListEntry $entry
     */
    public function getEntry()
    {
        return $this->entry;
    }
}
