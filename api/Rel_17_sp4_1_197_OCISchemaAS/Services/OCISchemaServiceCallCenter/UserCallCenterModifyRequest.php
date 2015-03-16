<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentAvailability;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the agents call center settings and the availability for an agent in one or more Call Centers.
 *         Contains a list specifying the desired availability status of one or more call centers.
 *         A default unavailable code will be used if the parameter agentUnavailableCode is not active, included or is invalid.
 *         Changing the agentACDState from unavailable to any other state will automatically clear the unavailable code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallCenterModifyRequest';
    protected $userId;
    protected $agentACDState;
    protected $agentUnavailableCode;
    protected $useDefaultGuardTimer;
    protected $enableGuardTimer;
    protected $guardTimerSeconds;
    protected $useSystemDefaultUnavailableSettings;
    protected $forceAgentUnavailableOnDNDActivation;
    protected $forceUnavailableOnPersonalCalls;
    protected $forceAgentUnavailableOnBouncedCallLimit;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable;
    protected $makeOutgoingCallsAsCallCenter;
    protected $outgoingCallDNIS;
    protected $callCenterAvailability;

    public function __construct(
         $userId = '',
         $agentACDState = null,
         $agentUnavailableCode = null,
         $useDefaultGuardTimer = null,
         $enableGuardTimer = null,
         $guardTimerSeconds = null,
         $useSystemDefaultUnavailableSettings = null,
         $forceAgentUnavailableOnDNDActivation = null,
         $forceUnavailableOnPersonalCalls = null,
         $forceAgentUnavailableOnBouncedCallLimit = null,
         $numberConsecutiveBouncedCallsToForceAgentUnavailable = null,
         $makeOutgoingCallsAsCallCenter = null,
         $outgoingCallDNIS = null,
         $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setAgentACDState($agentACDState);
        $this->setAgentUnavailableCode($agentUnavailableCode);
        $this->setUseDefaultGuardTimer($useDefaultGuardTimer);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings);
        $this->setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation);
        $this->setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls);
        $this->setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit);
        $this->setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter);
        $this->setOutgoingCallDNIS($outgoingCallDNIS);
        $this->setCallCenterAvailability($callCenterAvailability);
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
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setAgentACDState($agentACDState = null)
    {
        $this->agentACDState = ($agentACDState InstanceOf AgentACDState)
             ? $agentACDState
             : new AgentACDState($agentACDState);
        $this->agentACDState->setName('agentACDState');
        return $this;
    }

    /**
     * 
     * @return AgentACDState $agentACDState
     */
    public function getAgentACDState()
    {
        return ($this->agentACDState) ? $this->agentACDState->getValue() : null;
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $agentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return ($this->agentUnavailableCode) ? $this->agentUnavailableCode->getValue() : null;
    }

    /**
     * 
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer = null)
    {
        $this->useDefaultGuardTimer = new PrimitiveType($useDefaultGuardTimer);
        $this->useDefaultGuardTimer->setName('useDefaultGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultGuardTimer
     */
    public function getUseDefaultGuardTimer()
    {
        return ($this->useDefaultGuardTimer) ? $this->useDefaultGuardTimer->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = new PrimitiveType($enableGuardTimer);
        $this->enableGuardTimer->setName('enableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableGuardTimer
     */
    public function getEnableGuardTimer()
    {
        return ($this->enableGuardTimer) ? $this->enableGuardTimer->getValue() : null;
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
        $this->guardTimerSeconds->setName('guardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $guardTimerSeconds
     */
    public function getGuardTimerSeconds()
    {
        return ($this->guardTimerSeconds) ? $this->guardTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings = null)
    {
        $this->useSystemDefaultUnavailableSettings = new PrimitiveType($useSystemDefaultUnavailableSettings);
        $this->useSystemDefaultUnavailableSettings->setName('useSystemDefaultUnavailableSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultUnavailableSettings
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return ($this->useSystemDefaultUnavailableSettings) ? $this->useSystemDefaultUnavailableSettings->getValue() : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation = null)
    {
        $this->forceAgentUnavailableOnDNDActivation = new PrimitiveType($forceAgentUnavailableOnDNDActivation);
        $this->forceAgentUnavailableOnDNDActivation->setName('forceAgentUnavailableOnDNDActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnDNDActivation
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return ($this->forceAgentUnavailableOnDNDActivation) ? $this->forceAgentUnavailableOnDNDActivation->getValue() : null;
    }

    /**
     * 
     */
    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls = null)
    {
        $this->forceUnavailableOnPersonalCalls = new PrimitiveType($forceUnavailableOnPersonalCalls);
        $this->forceUnavailableOnPersonalCalls->setName('forceUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUnavailableOnPersonalCalls
     */
    public function getForceUnavailableOnPersonalCalls()
    {
        return ($this->forceUnavailableOnPersonalCalls) ? $this->forceUnavailableOnPersonalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit = null)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = new PrimitiveType($forceAgentUnavailableOnBouncedCallLimit);
        $this->forceAgentUnavailableOnBouncedCallLimit->setName('forceAgentUnavailableOnBouncedCallLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnBouncedCallLimit
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return ($this->forceAgentUnavailableOnBouncedCallLimit) ? $this->forceAgentUnavailableOnBouncedCallLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->setName('numberConsecutiveBouncedCallsToForceAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return CallCenterConsecutiveBouncedCallsToForceAgentUnavailable $numberConsecutiveBouncedCallsToForceAgentUnavailable
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return ($this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ? $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getValue() : null;
    }

    /**
     * 
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter = null)
    {
        $this->makeOutgoingCallsAsCallCenter = new PrimitiveType($makeOutgoingCallsAsCallCenter);
        $this->makeOutgoingCallsAsCallCenter->setName('makeOutgoingCallsAsCallCenter');
        return $this;
    }

    /**
     * 
     * @return boolean $makeOutgoingCallsAsCallCenter
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return ($this->makeOutgoingCallsAsCallCenter) ? $this->makeOutgoingCallsAsCallCenter->getValue() : null;
    }

    /**
     * 
     */
    public function setOutgoingCallDNIS(DNISKey $outgoingCallDNIS = null)
    {
        $this->outgoingCallDNIS = ($outgoingCallDNIS InstanceOf DNISKey)
             ? $outgoingCallDNIS
             : new DNISKey($outgoingCallDNIS);
        $this->outgoingCallDNIS->setName('outgoingCallDNIS');
        return $this;
    }

    /**
     * 
     * @return DNISKey $outgoingCallDNIS
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS;
    }

    /**
     * 
     */
    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
        $this->callCenterAvailability = ($callCenterAvailability InstanceOf CallCenterAgentAvailability)
             ? $callCenterAvailability
             : new CallCenterAgentAvailability($callCenterAvailability);
        $this->callCenterAvailability->setName('callCenterAvailability');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentAvailability $callCenterAvailability
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability;
    }
}
