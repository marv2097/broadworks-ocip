<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRemoteOffice; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserRemoteOfficeGetRequest.
 */
class UserRemoteOfficeGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserRemoteOfficeGetResponse';
    protected $isActive;
    protected $remoteOfficePhoneNumber;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRemoteOffice\UserRemoteOfficeGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setRemoteOfficePhoneNumber($remoteOfficePhoneNumber = null)
    {
        $this->remoteOfficePhoneNumber = ($remoteOfficePhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $remoteOfficePhoneNumber
             : new OutgoingDNorSIPURI($remoteOfficePhoneNumber);
        $this->remoteOfficePhoneNumber->setElementName('remoteOfficePhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $remoteOfficePhoneNumber
     */
    public function getRemoteOfficePhoneNumber()
    {
        return ($this->remoteOfficePhoneNumber)
            ? $this->remoteOfficePhoneNumber->getElementValue()
            : null;
    }
}
