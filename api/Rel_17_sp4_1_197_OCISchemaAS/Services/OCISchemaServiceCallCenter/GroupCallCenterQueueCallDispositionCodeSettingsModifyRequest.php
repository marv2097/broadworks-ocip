<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeActivation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallDispositionCodeWithLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the enterprise level data associated with Call Center Agents Unavailable Code Settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterQueueCallDispositionCodeSettingsModifyRequest';
    protected $serviceUserId;
    protected $enableCallDispositionCodes;
    protected $includeOrganizationCodes;
    protected $forceUseOfCallDispositionCodes;
    protected $defaultCallDispositionCode;
    protected $callDispositionCodeActivation;

    public function __construct(
         $serviceUserId = '',
         $enableCallDispositionCodes = null,
         $includeOrganizationCodes = null,
         $forceUseOfCallDispositionCodes = null,
         $defaultCallDispositionCode = null,
         $callDispositionCodeActivation = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableCallDispositionCodes($enableCallDispositionCodes);
        $this->setIncludeOrganizationCodes($includeOrganizationCodes);
        $this->setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes);
        $this->setDefaultCallDispositionCode($defaultCallDispositionCode);
        $this->setCallDispositionCodeActivation($callDispositionCodeActivation);
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
    public function setEnableCallDispositionCodes($enableCallDispositionCodes = null)
    {
        $this->enableCallDispositionCodes = new PrimitiveType($enableCallDispositionCodes);
        $this->enableCallDispositionCodes->setElementName('enableCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $enableCallDispositionCodes
     */
    public function getEnableCallDispositionCodes()
    {
        return ($this->enableCallDispositionCodes)
            ? $this->enableCallDispositionCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeOrganizationCodes($includeOrganizationCodes = null)
    {
        $this->includeOrganizationCodes = new PrimitiveType($includeOrganizationCodes);
        $this->includeOrganizationCodes->setElementName('includeOrganizationCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $includeOrganizationCodes
     */
    public function getIncludeOrganizationCodes()
    {
        return ($this->includeOrganizationCodes)
            ? $this->includeOrganizationCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceUseOfCallDispositionCodes($forceUseOfCallDispositionCodes = null)
    {
        $this->forceUseOfCallDispositionCodes = new PrimitiveType($forceUseOfCallDispositionCodes);
        $this->forceUseOfCallDispositionCodes->setElementName('forceUseOfCallDispositionCodes');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUseOfCallDispositionCodes
     */
    public function getForceUseOfCallDispositionCodes()
    {
        return ($this->forceUseOfCallDispositionCodes)
            ? $this->forceUseOfCallDispositionCodes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultCallDispositionCode(CallDispositionCodeWithLevel $defaultCallDispositionCode = null)
    {
        $this->defaultCallDispositionCode = ($defaultCallDispositionCode InstanceOf CallDispositionCodeWithLevel)
             ? $defaultCallDispositionCode
             : new CallDispositionCodeWithLevel($defaultCallDispositionCode);
        $this->defaultCallDispositionCode->setElementName('defaultCallDispositionCode');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeWithLevel $defaultCallDispositionCode
     */
    public function getDefaultCallDispositionCode()
    {
        return $this->defaultCallDispositionCode;
    }

    /**
     * 
     */
    public function setCallDispositionCodeActivation(CallDispositionCodeActivation $callDispositionCodeActivation = null)
    {
        $this->callDispositionCodeActivation = ($callDispositionCodeActivation InstanceOf CallDispositionCodeActivation)
             ? $callDispositionCodeActivation
             : new CallDispositionCodeActivation($callDispositionCodeActivation);
        $this->callDispositionCodeActivation->setElementName('callDispositionCodeActivation');
        return $this;
    }

    /**
     * 
     * @return CallDispositionCodeActivation $callDispositionCodeActivation
     */
    public function getCallDispositionCodeActivation()
    {
        return $this->callDispositionCodeActivation;
    }
}
