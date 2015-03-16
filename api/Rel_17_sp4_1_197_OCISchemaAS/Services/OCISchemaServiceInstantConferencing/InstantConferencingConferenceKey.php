<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies a conference by the combination of bridge id and conference id within the bridge.
 */
class InstantConferencingConferenceKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'InstantConferencingConferenceKey';
    protected $bridgeServiceUserId;
    protected $conferenceId;

    public function __construct(
         $bridgeServiceUserId = '',
         $conferenceId = ''
    ) {
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setConferenceId($conferenceId);
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
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = new SimpleContent($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return ($this->bridgeServiceUserId)
            ? $this->bridgeServiceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceId($conferenceId = null)
    {
        $this->conferenceId = new SimpleContent($conferenceId);
        $this->conferenceId->setElementName('conferenceId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $conferenceId
     */
    public function getConferenceId()
    {
        return ($this->conferenceId)
            ? $this->conferenceId->getElementValue()
            : null;
    }
}
