<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAccessCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDocumentId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingSlideName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Set presentation slide name of a conference document.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserInstantConferencingSetPresentationSlideNameRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserInstantConferencingSetPresentationSlideNameRequest';
    protected $userId;
    protected $bridgeServiceUserId;
    protected $documentId;
    protected $accessCode;
    protected $previousSlideName;
    protected $newSlideName;

    public function __construct(
         $userId = '',
         $bridgeServiceUserId = '',
         $documentId = '',
         $accessCode = '',
         $previousSlideName = '',
         $newSlideName = ''
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setDocumentId($documentId);
        $this->setAccessCode($accessCode);
        $this->setPreviousSlideName($previousSlideName);
        $this->setNewSlideName($newSlideName);
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
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setElementName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
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
    public function setDocumentId($documentId = null)
    {
        $this->documentId = ($documentId InstanceOf InstantConferencingDocumentId)
             ? $documentId
             : new InstantConferencingDocumentId($documentId);
        $this->documentId->setElementName('documentId');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDocumentId $documentId
     */
    public function getDocumentId()
    {
        return ($this->documentId)
            ? $this->documentId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessCode($accessCode = null)
    {
        $this->accessCode = ($accessCode InstanceOf InstantConferencingAccessCode)
             ? $accessCode
             : new InstantConferencingAccessCode($accessCode);
        $this->accessCode->setElementName('accessCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAccessCode $accessCode
     */
    public function getAccessCode()
    {
        return ($this->accessCode)
            ? $this->accessCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPreviousSlideName($previousSlideName = null)
    {
        $this->previousSlideName = ($previousSlideName InstanceOf InstantConferencingSlideName)
             ? $previousSlideName
             : new InstantConferencingSlideName($previousSlideName);
        $this->previousSlideName->setElementName('previousSlideName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideName $previousSlideName
     */
    public function getPreviousSlideName()
    {
        return ($this->previousSlideName)
            ? $this->previousSlideName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewSlideName($newSlideName = null)
    {
        $this->newSlideName = ($newSlideName InstanceOf InstantConferencingSlideName)
             ? $newSlideName
             : new InstantConferencingSlideName($newSlideName);
        $this->newSlideName->setElementName('newSlideName');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingSlideName $newSlideName
     */
    public function getNewSlideName()
    {
        return ($this->newSlideName)
            ? $this->newSlideName->getElementValue()
            : null;
    }
}
