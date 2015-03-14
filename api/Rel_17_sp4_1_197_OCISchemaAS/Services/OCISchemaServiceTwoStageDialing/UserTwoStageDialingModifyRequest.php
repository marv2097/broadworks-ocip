<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTwoStageDialing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user level data associated with Two Stage Dialing.
 *           The response is either a SuccessResponse or an ErrorResponse.
 */
class UserTwoStageDialingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = 'UserTwoStageDialingModifyRequest';
    protected $userId                           = null;
    protected $isActive                         = null;
    protected $allowActivationWithUserAddresses = null;

    public function __construct(
         $userId,
         $isActive = null,
         $allowActivationWithUserAddresses = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setAllowActivationWithUserAddresses($allowActivationWithUserAddresses);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setAllowActivationWithUserAddresses($allowActivationWithUserAddresses = null)
    {
        if (!$allowActivationWithUserAddresses) return $this;
        $this->allowActivationWithUserAddresses = new PrimitiveType($allowActivationWithUserAddresses);
        $this->allowActivationWithUserAddresses->setName('allowActivationWithUserAddresses');
        return $this;
    }

    /**
     * 
     * @return boolean $allowActivationWithUserAddresses
     */
    public function getAllowActivationWithUserAddresses()
    {
        return $this->allowActivationWithUserAddresses->getValue();
    }
}
