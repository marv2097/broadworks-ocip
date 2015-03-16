<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecordingKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Play a recording to a specified phone.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingPlayStandAloneRecordingToPhoneRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingPlayStandAloneRecordingToPhoneRequest';
    protected $conferenceOwnerUserId;
    protected $recordingKey;
    protected $playBackPhoneNumber;

    public function __construct(
         $conferenceOwnerUserId = '',
         $recordingKey = '',
         $playBackPhoneNumber = ''
    ) {
        $this->setConferenceOwnerUserId($conferenceOwnerUserId);
        $this->setRecordingKey($recordingKey);
        $this->setPlayBackPhoneNumber($playBackPhoneNumber);
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
    public function setRecordingKey(InstantConferencingRecordingKey $recordingKey = null)
    {
        $this->recordingKey = ($recordingKey InstanceOf InstantConferencingRecordingKey)
             ? $recordingKey
             : new InstantConferencingRecordingKey($recordingKey);
        $this->recordingKey->setElementName('recordingKey');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingRecordingKey $recordingKey
     */
    public function getRecordingKey()
    {
        return $this->recordingKey;
    }

    /**
     * 
     */
    public function setPlayBackPhoneNumber($playBackPhoneNumber = null)
    {
        $this->playBackPhoneNumber = ($playBackPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $playBackPhoneNumber
             : new OutgoingDNorSIPURI($playBackPhoneNumber);
        $this->playBackPhoneNumber->setElementName('playBackPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $playBackPhoneNumber
     */
    public function getPlayBackPhoneNumber()
    {
        return ($this->playBackPhoneNumber)
            ? $this->playBackPhoneNumber->getElementValue()
            : null;
    }
}
