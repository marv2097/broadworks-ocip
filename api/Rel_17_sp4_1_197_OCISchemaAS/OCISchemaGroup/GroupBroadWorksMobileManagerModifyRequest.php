<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerCertificateFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerInformationFile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the BroadWorks Mobile Manager settings.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupBroadWorksMobileManagerModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupBroadWorksMobileManagerModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $informationFile;
    protected $certificateFile;
    protected $localToCarrier;
    protected $maxTxPerSecondEnabled;
    protected $maxTxPerSecond;
    protected $tldnEnabled;
    protected $genericNumberEnabled;
    protected $mobileStateCheckEnabled;
    protected $locationBasedServicesEnabled;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $informationFile = null,
         $certificateFile = null,
         $localToCarrier = null,
         $maxTxPerSecondEnabled = null,
         $maxTxPerSecond = null,
         $tldnEnabled = null,
         $genericNumberEnabled = null,
         $mobileStateCheckEnabled = null,
         $locationBasedServicesEnabled = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setInformationFile($informationFile);
        $this->setCertificateFile($certificateFile);
        $this->setLocalToCarrier($localToCarrier);
        $this->setMaxTxPerSecondEnabled($maxTxPerSecondEnabled);
        $this->setMaxTxPerSecond($maxTxPerSecond);
        $this->setTldnEnabled($tldnEnabled);
        $this->setGenericNumberEnabled($genericNumberEnabled);
        $this->setMobileStateCheckEnabled($mobileStateCheckEnabled);
        $this->setLocationBasedServicesEnabled($locationBasedServicesEnabled);
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
    public function setInformationFile($informationFile = null)
    {
        $this->informationFile = ($informationFile InstanceOf BroadWorksMobileManagerInformationFile)
             ? $informationFile
             : new BroadWorksMobileManagerInformationFile($informationFile);
        $this->informationFile->setElementName('informationFile');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerInformationFile $informationFile
     */
    public function getInformationFile()
    {
        return ($this->informationFile)
            ? $this->informationFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCertificateFile($certificateFile = null)
    {
        $this->certificateFile = ($certificateFile InstanceOf BroadWorksMobileManagerCertificateFile)
             ? $certificateFile
             : new BroadWorksMobileManagerCertificateFile($certificateFile);
        $this->certificateFile->setElementName('certificateFile');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerCertificateFile $certificateFile
     */
    public function getCertificateFile()
    {
        return ($this->certificateFile)
            ? $this->certificateFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocalToCarrier($localToCarrier = null)
    {
        $this->localToCarrier = new PrimitiveType($localToCarrier);
        $this->localToCarrier->setElementName('localToCarrier');
        return $this;
    }

    /**
     * 
     * @return boolean $localToCarrier
     */
    public function getLocalToCarrier()
    {
        return ($this->localToCarrier)
            ? $this->localToCarrier->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxTxPerSecondEnabled($maxTxPerSecondEnabled = null)
    {
        $this->maxTxPerSecondEnabled = new PrimitiveType($maxTxPerSecondEnabled);
        $this->maxTxPerSecondEnabled->setElementName('maxTxPerSecondEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $maxTxPerSecondEnabled
     */
    public function getMaxTxPerSecondEnabled()
    {
        return ($this->maxTxPerSecondEnabled)
            ? $this->maxTxPerSecondEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxTxPerSecond($maxTxPerSecond = null)
    {
        $this->maxTxPerSecond = ($maxTxPerSecond InstanceOf BroadWorksMobileManagerMaxTxPerSecond)
             ? $maxTxPerSecond
             : new BroadWorksMobileManagerMaxTxPerSecond($maxTxPerSecond);
        $this->maxTxPerSecond->setElementName('maxTxPerSecond');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerMaxTxPerSecond $maxTxPerSecond
     */
    public function getMaxTxPerSecond()
    {
        return ($this->maxTxPerSecond)
            ? $this->maxTxPerSecond->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTldnEnabled($tldnEnabled = null)
    {
        $this->tldnEnabled = new PrimitiveType($tldnEnabled);
        $this->tldnEnabled->setElementName('tldnEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $tldnEnabled
     */
    public function getTldnEnabled()
    {
        return ($this->tldnEnabled)
            ? $this->tldnEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGenericNumberEnabled($genericNumberEnabled = null)
    {
        $this->genericNumberEnabled = new PrimitiveType($genericNumberEnabled);
        $this->genericNumberEnabled->setElementName('genericNumberEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $genericNumberEnabled
     */
    public function getGenericNumberEnabled()
    {
        return ($this->genericNumberEnabled)
            ? $this->genericNumberEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobileStateCheckEnabled($mobileStateCheckEnabled = null)
    {
        $this->mobileStateCheckEnabled = new PrimitiveType($mobileStateCheckEnabled);
        $this->mobileStateCheckEnabled->setElementName('mobileStateCheckEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $mobileStateCheckEnabled
     */
    public function getMobileStateCheckEnabled()
    {
        return ($this->mobileStateCheckEnabled)
            ? $this->mobileStateCheckEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLocationBasedServicesEnabled($locationBasedServicesEnabled = null)
    {
        $this->locationBasedServicesEnabled = new PrimitiveType($locationBasedServicesEnabled);
        $this->locationBasedServicesEnabled->setElementName('locationBasedServicesEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $locationBasedServicesEnabled
     */
    public function getLocationBasedServicesEnabled()
    {
        return ($this->locationBasedServicesEnabled)
            ? $this->locationBasedServicesEnabled->getElementValue()
            : null;
    }
}
