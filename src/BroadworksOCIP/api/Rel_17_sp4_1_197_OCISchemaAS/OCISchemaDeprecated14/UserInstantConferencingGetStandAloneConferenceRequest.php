<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingConferenceKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Get the information of a conference owned or delegated by the user.
 *         The response is either UserInstantConferencingGetStandAloneConferenceResponse
 *         or ErrorResponse.
 *         Replaced by: UserInstantConferencingGetStandAloneConferenceRequest14sp6
 */
class UserInstantConferencingGetStandAloneConferenceRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetStandAloneConferenceResponse';
    public    $elementName = 'UserInstantConferencingGetStandAloneConferenceRequest';
    protected $conferenceOwnerUserId;
    protected $conferenceKey;

    public function __construct(
         $conferenceOwnerUserId = '',
         $conferenceKey = ''
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setConferenceKey($conferenceKey);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserInstantConferencingGetStandAloneConferenceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setConferenceOwnerUserId($conferenceOwnerUserId = null)
    {
        $this->conferenceOwnerUserId = ($conferenceOwnerUserId InstanceOf UserId)
             ? $conferenceOwnerUserId
             : new UserId($conferenceOwnerUserId);
        $this->conferenceOwnerUserId->setElementName('conferenceOwnerUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceOwnerUserId
     */
    public function getConferenceOwnerUserId()
    {
        return ($this->conferenceOwnerUserId)
            ? $this->conferenceOwnerUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceKey(InstantConferencingConferenceKey $conferenceKey = null)
    {
        $this->conferenceKey = ($conferenceKey InstanceOf InstantConferencingConferenceKey)
             ? $conferenceKey
             : new InstantConferencingConferenceKey($conferenceKey);
        $this->conferenceKey->setElementName('conferenceKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingConferenceKey $conferenceKey
     */
    public function getConferenceKey()
    {
        return $this->conferenceKey;
    }
}
