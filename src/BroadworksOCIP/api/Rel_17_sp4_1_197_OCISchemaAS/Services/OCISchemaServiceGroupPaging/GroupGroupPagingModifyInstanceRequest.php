<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingConfirmationToneTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceGroupPaging\GroupPagingOriginatorCLIDPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Group Paging instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupGroupPagingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupGroupPagingModifyInstanceRequest';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $confirmationToneTimeoutSeconds;
    protected $deliverOriginatorCLIDInstead;
    protected $originatorCLIDPrefix;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $confirmationToneTimeoutSeconds = null,
         $deliverOriginatorCLIDInstead = null,
         $originatorCLIDPrefix = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
        $this->setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead);
        $this->setOriginatorCLIDPrefix($originatorCLIDPrefix);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds = null)
    {
        $this->confirmationToneTimeoutSeconds = ($confirmationToneTimeoutSeconds InstanceOf GroupPagingConfirmationToneTimeoutSeconds)
             ? $confirmationToneTimeoutSeconds
             : new GroupPagingConfirmationToneTimeoutSeconds($confirmationToneTimeoutSeconds);
        $this->confirmationToneTimeoutSeconds->setElementName('confirmationToneTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return GroupPagingConfirmationToneTimeoutSeconds $confirmationToneTimeoutSeconds
     */
    public function getConfirmationToneTimeoutSeconds()
    {
        return ($this->confirmationToneTimeoutSeconds)
            ? $this->confirmationToneTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeliverOriginatorCLIDInstead($deliverOriginatorCLIDInstead = null)
    {
        $this->deliverOriginatorCLIDInstead = new PrimitiveType($deliverOriginatorCLIDInstead);
        $this->deliverOriginatorCLIDInstead->setElementName('deliverOriginatorCLIDInstead');
        return $this;
    }

    /**
     * 
     * @return boolean $deliverOriginatorCLIDInstead
     */
    public function getDeliverOriginatorCLIDInstead()
    {
        return ($this->deliverOriginatorCLIDInstead)
            ? $this->deliverOriginatorCLIDInstead->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOriginatorCLIDPrefix($originatorCLIDPrefix = null)
    {
        $this->originatorCLIDPrefix = ($originatorCLIDPrefix InstanceOf GroupPagingOriginatorCLIDPrefix)
             ? $originatorCLIDPrefix
             : new GroupPagingOriginatorCLIDPrefix($originatorCLIDPrefix);
        $this->originatorCLIDPrefix->setElementName('originatorCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return GroupPagingOriginatorCLIDPrefix $originatorCLIDPrefix
     */
    public function getOriginatorCLIDPrefix()
    {
        return ($this->originatorCLIDPrefix)
            ? $this->originatorCLIDPrefix->getElementValue()
            : null;
    }
}
