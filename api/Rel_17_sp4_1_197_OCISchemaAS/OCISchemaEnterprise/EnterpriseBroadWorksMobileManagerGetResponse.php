<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerMaxTxPerSecond;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetRequest
 */
class EnterpriseBroadWorksMobileManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseBroadWorksMobileManagerGetResponse';
    protected $mobileManagerId;
    protected $name;
    protected $isActive;
    protected $localToCarrier;
    protected $deactivationReason;
    protected $maxTxPerSecondEnabled;
    protected $maxTxPerSecond;
    protected $tldnEnabled;
    protected $genericNumberEnabled;
    protected $mobileStateCheckEnabled;
    protected $locationBasedServicesEnabled;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseBroadWorksMobileManagerGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMobileManagerId($mobileManagerId = null)
    {
        $this->mobileManagerId = ($mobileManagerId InstanceOf BroadWorksMobileManagerDomainName)
             ? $mobileManagerId
             : new BroadWorksMobileManagerDomainName($mobileManagerId);
        $this->mobileManagerId->setElementName('mobileManagerId');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDomainName $mobileManagerId
     */
    public function getMobileManagerId()
    {
        return ($this->mobileManagerId)
            ? $this->mobileManagerId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf BroadWorksMobileManagerName)
             ? $name
             : new BroadWorksMobileManagerName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
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
    public function setDeactivationReason($deactivationReason = null)
    {
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
        $this->deactivationReason->setElementName('deactivationReason');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDeactivationReason $deactivationReason
     */
    public function getDeactivationReason()
    {
        return ($this->deactivationReason)
            ? $this->deactivationReason->getElementValue()
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
