<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold\MusicOnHoldMessageSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify data for a group or department Music On Hold Instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMusicOnHoldModifyInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMusicOnHoldModifyInstanceRequest14';
    protected $serviceProviderId;
    protected $groupId;
    protected $department;
    protected $isActiveDuringCallHold;
    protected $isActiveDuringCallPark;
    protected $isActiveDuringBusyCampOn;
    protected $messageSelection;
    protected $accessDeviceEndpoint;
    protected $audioFile;
    protected $videoFile;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $department = null,
         $isActiveDuringCallHold = null,
         $isActiveDuringCallPark = null,
         $isActiveDuringBusyCampOn = null,
         $messageSelection = null,
         $accessDeviceEndpoint = null,
         $audioFile = null,
         $videoFile = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDepartment($department);
        $this->setIsActiveDuringCallHold($isActiveDuringCallHold);
        $this->setIsActiveDuringCallPark($isActiveDuringCallPark);
        $this->setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn);
        $this->setMessageSelection($messageSelection);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setElementName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallHold($isActiveDuringCallHold = null)
    {
        $this->isActiveDuringCallHold = new PrimitiveType($isActiveDuringCallHold);
        $this->isActiveDuringCallHold->setElementName('isActiveDuringCallHold');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallHold
     */
    public function getIsActiveDuringCallHold()
    {
        return ($this->isActiveDuringCallHold)
            ? $this->isActiveDuringCallHold->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringCallPark($isActiveDuringCallPark = null)
    {
        $this->isActiveDuringCallPark = new PrimitiveType($isActiveDuringCallPark);
        $this->isActiveDuringCallPark->setElementName('isActiveDuringCallPark');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringCallPark
     */
    public function getIsActiveDuringCallPark()
    {
        return ($this->isActiveDuringCallPark)
            ? $this->isActiveDuringCallPark->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActiveDuringBusyCampOn($isActiveDuringBusyCampOn = null)
    {
        $this->isActiveDuringBusyCampOn = new PrimitiveType($isActiveDuringBusyCampOn);
        $this->isActiveDuringBusyCampOn->setElementName('isActiveDuringBusyCampOn');
        return $this;
    }

    /**
     * 
     * @return boolean $isActiveDuringBusyCampOn
     */
    public function getIsActiveDuringBusyCampOn()
    {
        return ($this->isActiveDuringBusyCampOn)
            ? $this->isActiveDuringBusyCampOn->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMessageSelection($messageSelection = null)
    {
        $this->messageSelection = ($messageSelection InstanceOf MusicOnHoldMessageSelection)
             ? $messageSelection
             : new MusicOnHoldMessageSelection($messageSelection);
        $this->messageSelection->setElementName('messageSelection');
        return $this;
    }

    /**
     * 
     * @return MusicOnHoldMessageSelection $messageSelection
     */
    public function getMessageSelection()
    {
        return ($this->messageSelection)
            ? $this->messageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointModify $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = ($accessDeviceEndpoint InstanceOf AccessDeviceEndpointModify)
             ? $accessDeviceEndpoint
             : new AccessDeviceEndpointModify($accessDeviceEndpoint);
        $this->accessDeviceEndpoint->setElementName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointModify $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
    }

    /**
     * 
     */
    public function setAudioFile(LabeledFileResource $audioFile = null)
    {
        $this->audioFile = ($audioFile InstanceOf LabeledFileResource)
             ? $audioFile
             : new LabeledFileResource($audioFile);
        $this->audioFile->setElementName('audioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $audioFile
     */
    public function getAudioFile()
    {
        return $this->audioFile;
    }

    /**
     * 
     */
    public function setVideoFile(LabeledFileResource $videoFile = null)
    {
        $this->videoFile = ($videoFile InstanceOf LabeledFileResource)
             ? $videoFile
             : new LabeledFileResource($videoFile);
        $this->videoFile->setElementName('videoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledFileResource $videoFile
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }
}
