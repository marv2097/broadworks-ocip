<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServicePackMigrationTaskName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementServicePackNameList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserServiceList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replace the list of services and packs to be assigned to users during the service pack migration.
 *         Modification is only allowed prior to task execution.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest extends ComplexType implements ComplexInterface
{
    public    $name                = 'ServiceProviderServicePackMigrationTaskModifyAssignmentListRequest';
    protected $serviceProviderId   = null;
    protected $taskName            = null;
    protected $userServiceNameList = null;
    protected $servicePackNameList = null;

    public function __construct(
         $serviceProviderId,
         $taskName,
         ReplacementUserServiceList $userServiceNameList = null,
         ReplacementServicePackNameList $servicePackNameList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setTaskName($taskName);
        $this->setUserServiceNameList($userServiceNameList);
        $this->setServicePackNameList($servicePackNameList);
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
    public function setTaskName($taskName = null)
    {
        if (!$taskName) return $this;
        $this->taskName = ($taskName InstanceOf ServicePackMigrationTaskName)
             ? $taskName
             : new ServicePackMigrationTaskName($taskName);
        $this->taskName->setName('taskName');
        return $this;
    }

    /**
     * 
     * @return ServicePackMigrationTaskName $taskName
     */
    public function getTaskName()
    {
        return $this->taskName->getValue();
    }

    /**
     * 
     */
    public function setUserServiceNameList(ReplacementUserServiceList $userServiceNameList = null)
    {
        if (!$userServiceNameList) return $this;
        $this->userServiceNameList = $userServiceNameList;
        $this->userServiceNameList->setName('userServiceNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserServiceList $userServiceNameList
     */
    public function getUserServiceNameList()
    {
        return $this->userServiceNameList;
    }

    /**
     * 
     */
    public function setServicePackNameList(ReplacementServicePackNameList $servicePackNameList = null)
    {
        if (!$servicePackNameList) return $this;
        $this->servicePackNameList = $servicePackNameList;
        $this->servicePackNameList->setName('servicePackNameList');
        return $this;
    }

    /**
     * 
     * @return ReplacementServicePackNameList $servicePackNameList
     */
    public function getServicePackNameList()
    {
        return $this->servicePackNameList;
    }
}
