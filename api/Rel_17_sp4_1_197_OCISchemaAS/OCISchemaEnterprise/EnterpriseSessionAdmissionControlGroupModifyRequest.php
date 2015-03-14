<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\ReplacementEnterpriseDeviceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a session admission control group for the enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseSessionAdmissionControlGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = 'EnterpriseSessionAdmissionControlGroupModifyRequest';
    protected $serviceProviderId               = null;
    protected $name                            = null;
    protected $newName                         = null;
    protected $maxSession                      = null;
    protected $maxUserOriginatingSessions      = null;
    protected $maxUserTerminatingSessions      = null;
    protected $reservedSession                 = null;
    protected $reservedUserOriginatingSessions = null;
    protected $reservedUserTerminatingSessions = null;
    protected $becomeDefaultGroup              = null;
    protected $countIntraSACGroupSessions      = null;
    protected $deviceList                      = null;

    public function __construct(
         $serviceProviderId,
         $name,
         $newName = null,
         $maxSession = null,
         $maxUserOriginatingSessions = null,
         $maxUserTerminatingSessions = null,
         $reservedSession = null,
         $reservedUserOriginatingSessions = null,
         $reservedUserTerminatingSessions = null,
         $becomeDefaultGroup = null,
         $countIntraSACGroupSessions = null,
         ReplacementEnterpriseDeviceList $deviceList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setName($name);
        $this->setNewName($newName);
        $this->setMaxSession($maxSession);
        $this->setMaxUserOriginatingSessions($maxUserOriginatingSessions);
        $this->setMaxUserTerminatingSessions($maxUserTerminatingSessions);
        $this->setReservedSession($reservedSession);
        $this->setReservedUserOriginatingSessions($reservedUserOriginatingSessions);
        $this->setReservedUserTerminatingSessions($reservedUserTerminatingSessions);
        $this->setBecomeDefaultGroup($becomeDefaultGroup);
        $this->setCountIntraSACGroupSessions($countIntraSACGroupSessions);
        $this->setDeviceList($deviceList);
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf SessionAdmissionControlGroupName)
             ? $name
             : new SessionAdmissionControlGroupName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $name
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf SessionAdmissionControlGroupName)
             ? $newName
             : new SessionAdmissionControlGroupName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return SessionAdmissionControlGroupName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setMaxSession($maxSession = null)
    {
        if (!$maxSession) return $this;
        $this->maxSession = ($maxSession InstanceOf NonNegativeInt)
             ? $maxSession
             : new NonNegativeInt($maxSession);
        $this->maxSession->setName('maxSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxSession
     */
    public function getMaxSession()
    {
        return $this->maxSession->getValue();
    }

    /**
     * 
     */
    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions = null)
    {
        if (!$maxUserOriginatingSessions) return $this;
        $this->maxUserOriginatingSessions = ($maxUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $maxUserOriginatingSessions
             : new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserOriginatingSessions->setName('maxUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserOriginatingSessions
     */
    public function getMaxUserOriginatingSessions()
    {
        return $this->maxUserOriginatingSessions->getValue();
    }

    /**
     * 
     */
    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions = null)
    {
        if (!$maxUserTerminatingSessions) return $this;
        $this->maxUserTerminatingSessions = ($maxUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $maxUserTerminatingSessions
             : new NonNegativeInt($maxUserTerminatingSessions);
        $this->maxUserTerminatingSessions->setName('maxUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $maxUserTerminatingSessions
     */
    public function getMaxUserTerminatingSessions()
    {
        return $this->maxUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setReservedSession($reservedSession = null)
    {
        if (!$reservedSession) return $this;
        $this->reservedSession = ($reservedSession InstanceOf NonNegativeInt)
             ? $reservedSession
             : new NonNegativeInt($reservedSession);
        $this->reservedSession->setName('reservedSession');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedSession
     */
    public function getReservedSession()
    {
        return $this->reservedSession->getValue();
    }

    /**
     * 
     */
    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions = null)
    {
        if (!$reservedUserOriginatingSessions) return $this;
        $this->reservedUserOriginatingSessions = ($reservedUserOriginatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserOriginatingSessions
             : new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserOriginatingSessions->setName('reservedUserOriginatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserOriginatingSessions
     */
    public function getReservedUserOriginatingSessions()
    {
        return $this->reservedUserOriginatingSessions->getValue();
    }

    /**
     * 
     */
    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions = null)
    {
        if (!$reservedUserTerminatingSessions) return $this;
        $this->reservedUserTerminatingSessions = ($reservedUserTerminatingSessions InstanceOf NonNegativeInt)
             ? $reservedUserTerminatingSessions
             : new NonNegativeInt($reservedUserTerminatingSessions);
        $this->reservedUserTerminatingSessions->setName('reservedUserTerminatingSessions');
        return $this;
    }

    /**
     * 
     * @return NonNegativeInt $reservedUserTerminatingSessions
     */
    public function getReservedUserTerminatingSessions()
    {
        return $this->reservedUserTerminatingSessions->getValue();
    }

    /**
     * 
     */
    public function setBecomeDefaultGroup($becomeDefaultGroup = null)
    {
        if (!$becomeDefaultGroup) return $this;
        $this->becomeDefaultGroup = new PrimitiveType($becomeDefaultGroup);
        $this->becomeDefaultGroup->setName('becomeDefaultGroup');
        return $this;
    }

    /**
     * 
     * @return boolean $becomeDefaultGroup
     */
    public function getBecomeDefaultGroup()
    {
        return $this->becomeDefaultGroup->getValue();
    }

    /**
     * 
     */
    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions = null)
    {
        if (!$countIntraSACGroupSessions) return $this;
        $this->countIntraSACGroupSessions = new PrimitiveType($countIntraSACGroupSessions);
        $this->countIntraSACGroupSessions->setName('countIntraSACGroupSessions');
        return $this;
    }

    /**
     * 
     * @return boolean $countIntraSACGroupSessions
     */
    public function getCountIntraSACGroupSessions()
    {
        return $this->countIntraSACGroupSessions->getValue();
    }

    /**
     * 
     */
    public function setDeviceList(ReplacementEnterpriseDeviceList $deviceList = null)
    {
        if (!$deviceList) return $this;
        $this->deviceList = $deviceList;
        $this->deviceList->setName('deviceList');
        return $this;
    }

    /**
     * 
     * @return ReplacementEnterpriseDeviceList $deviceList
     */
    public function getDeviceList()
    {
        return $this->deviceList;
    }
}
