<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to get the list of Device Management user modifiable files.
 *         The response is either UserAccessDeviceFileGetListResponse or ErrorResponse.
 */
class UserAccessDeviceFileGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             AccessDevice $accessDevice
    ) {
        $this->userId       = new UserId($userId);
        $this->accessDevice = $accessDevice;
        $this->args         = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAccessDevice($accessDevice)
    {
        $accessDevice and $this->accessDevice = new AccessDevice($accessDevice);
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }
}