<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add users to an enterprise trunk in a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupEnterpriseTrunkAddUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $enterpriseTrunkName,
             $userId=null
    ) {
        $this->serviceProviderId   = new ServiceProviderId($serviceProviderId);
        $this->groupId             = new GroupId($groupId);
        $this->enterpriseTrunkName = new EnterpriseTrunkName($enterpriseTrunkName);
        $this->userId              = new UserId($userId);
        $this->args                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setEnterpriseTrunkName($enterpriseTrunkName)
    {
        $enterpriseTrunkName and $this->enterpriseTrunkName = new EnterpriseTrunkName($enterpriseTrunkName);
    }

    public function getEnterpriseTrunkName()
    {
        return (!$this->enterpriseTrunkName) ?: $this->enterpriseTrunkName->value();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }
}