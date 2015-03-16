<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a list of home zones from the BroadWorks Mobile Manager.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerDeleteHomeZoneListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksMobileManagerDeleteHomeZoneListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $homeZoneId;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $homeZoneId = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setHomeZoneId($homeZoneId);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHomeZoneId($homeZoneId = null)
    {
        $this->homeZoneId = new PrimitiveType($homeZoneId);
        $this->homeZoneId->setElementName('homeZoneId');
        return $this;
    }

    /**
     * 
     * @return string $homeZoneId
     */
    public function getHomeZoneId()
    {
        return ($this->homeZoneId)
            ? $this->homeZoneId->getElementValue()
            : null;
    }
}
