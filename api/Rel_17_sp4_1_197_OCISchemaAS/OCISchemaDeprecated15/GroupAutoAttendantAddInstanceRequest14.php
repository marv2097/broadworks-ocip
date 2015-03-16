<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantNameDialingEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutoAttendant\AutoAttendantDialingScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\AutoAttendantAddMenu;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Auto Attendant instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupAutoAttendantAddInstanceRequest16
 */
class GroupAutoAttendantAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupAutoAttendantAddInstanceRequest14';
    protected $serviceProviderId;
    protected $groupId;
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $enableVideo;
    protected $businessHours;
    protected $holidayScheduleName;
    protected $extensionDialingScope;
    protected $nameDialingScope;
    protected $nameDialingEntries;
    protected $businessHoursMenu;
    protected $afterHoursMenu;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $serviceUserId = '',
         $serviceInstanceProfile = '',
         $enableVideo = '',
         $businessHours = null,
         $holidayScheduleName = null,
         $extensionDialingScope = '',
         $nameDialingScope = '',
         $nameDialingEntries = '',
         $businessHoursMenu = null,
         $afterHoursMenu = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setEnableVideo($enableVideo);
        $this->setBusinessHours($businessHours);
        $this->setHolidayScheduleName($holidayScheduleName);
        $this->setExtensionDialingScope($extensionDialingScope);
        $this->setNameDialingScope($nameDialingScope);
        $this->setNameDialingEntries($nameDialingEntries);
        $this->setBusinessHoursMenu($businessHoursMenu);
        $this->setAfterHoursMenu($afterHoursMenu);
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceAddProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceAddProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo) ? $this->enableVideo->getValue() : null;
    }

    /**
     * 
     */
    public function setBusinessHours($businessHours = null)
    {
        $this->businessHours = ($businessHours InstanceOf ScheduleName)
             ? $businessHours
             : new ScheduleName($businessHours);
        $this->businessHours->setName('businessHours');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $businessHours
     */
    public function getBusinessHours()
    {
        return ($this->businessHours) ? $this->businessHours->getValue() : null;
    }

    /**
     * 
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return ($this->holidayScheduleName) ? $this->holidayScheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setExtensionDialingScope($extensionDialingScope = null)
    {
        $this->extensionDialingScope = ($extensionDialingScope InstanceOf AutoAttendantDialingScope)
             ? $extensionDialingScope
             : new AutoAttendantDialingScope($extensionDialingScope);
        $this->extensionDialingScope->setName('extensionDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $extensionDialingScope
     */
    public function getExtensionDialingScope()
    {
        return ($this->extensionDialingScope) ? $this->extensionDialingScope->getValue() : null;
    }

    /**
     * 
     */
    public function setNameDialingScope($nameDialingScope = null)
    {
        $this->nameDialingScope = ($nameDialingScope InstanceOf AutoAttendantDialingScope)
             ? $nameDialingScope
             : new AutoAttendantDialingScope($nameDialingScope);
        $this->nameDialingScope->setName('nameDialingScope');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantDialingScope $nameDialingScope
     */
    public function getNameDialingScope()
    {
        return ($this->nameDialingScope) ? $this->nameDialingScope->getValue() : null;
    }

    /**
     * 
     */
    public function setNameDialingEntries($nameDialingEntries = null)
    {
        $this->nameDialingEntries = ($nameDialingEntries InstanceOf AutoAttendantNameDialingEntry)
             ? $nameDialingEntries
             : new AutoAttendantNameDialingEntry($nameDialingEntries);
        $this->nameDialingEntries->setName('nameDialingEntries');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantNameDialingEntry $nameDialingEntries
     */
    public function getNameDialingEntries()
    {
        return ($this->nameDialingEntries) ? $this->nameDialingEntries->getValue() : null;
    }

    /**
     * 
     */
    public function setBusinessHoursMenu(AutoAttendantAddMenu $businessHoursMenu = null)
    {
        $this->businessHoursMenu = ($businessHoursMenu InstanceOf AutoAttendantAddMenu)
             ? $businessHoursMenu
             : new AutoAttendantAddMenu($businessHoursMenu);
        $this->businessHoursMenu->setName('businessHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantAddMenu $businessHoursMenu
     */
    public function getBusinessHoursMenu()
    {
        return $this->businessHoursMenu;
    }

    /**
     * 
     */
    public function setAfterHoursMenu(AutoAttendantAddMenu $afterHoursMenu = null)
    {
        $this->afterHoursMenu = ($afterHoursMenu InstanceOf AutoAttendantAddMenu)
             ? $afterHoursMenu
             : new AutoAttendantAddMenu($afterHoursMenu);
        $this->afterHoursMenu->setName('afterHoursMenu');
        return $this;
    }

    /**
     * 
     * @return AutoAttendantAddMenu $afterHoursMenu
     */
    public function getAfterHoursMenu()
    {
        return $this->afterHoursMenu;
    }
}
