<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\StreetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Contact;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the ServiceProviderGetRequest17sp1.
 *         The response contains the service provider or enterprise's profile information.
 */
class ServiceProviderGetResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderGetResponse17sp1';
    protected $defaultDomain;
    protected $serviceProviderName;
    protected $supportEmail;
    protected $contact;
    protected $address;
    protected $useServiceProviderLanguages;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderGetResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
        $this->defaultDomain->setElementName('defaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $defaultDomain
     */
    public function getDefaultDomain()
    {
        return ($this->defaultDomain)
            ? $this->defaultDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceProviderName($serviceProviderName = null)
    {
        $this->serviceProviderName = ($serviceProviderName InstanceOf ServiceProviderName)
             ? $serviceProviderName
             : new ServiceProviderName($serviceProviderName);
        $this->serviceProviderName->setElementName('serviceProviderName');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderName $serviceProviderName
     */
    public function getServiceProviderName()
    {
        return ($this->serviceProviderName)
            ? $this->serviceProviderName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSupportEmail($supportEmail = null)
    {
        $this->supportEmail = ($supportEmail InstanceOf EmailAddress)
             ? $supportEmail
             : new EmailAddress($supportEmail);
        $this->supportEmail->setElementName('supportEmail');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $supportEmail
     */
    public function getSupportEmail()
    {
        return ($this->supportEmail)
            ? $this->supportEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContact(Contact $contact = null)
    {
        $this->contact = ($contact InstanceOf Contact)
             ? $contact
             : new Contact($contact);
        $this->contact->setElementName('contact');
        return $this;
    }

    /**
     * 
     * @return Contact $contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * 
     */
    public function setAddress(StreetAddress $address = null)
    {
        $this->address = ($address InstanceOf StreetAddress)
             ? $address
             : new StreetAddress($address);
        $this->address->setElementName('address');
        return $this;
    }

    /**
     * 
     * @return StreetAddress $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * 
     */
    public function setUseServiceProviderLanguages($useServiceProviderLanguages = null)
    {
        $this->useServiceProviderLanguages = new PrimitiveType($useServiceProviderLanguages);
        $this->useServiceProviderLanguages->setElementName('useServiceProviderLanguages');
        return $this;
    }

    /**
     * 
     * @return boolean $useServiceProviderLanguages
     */
    public function getUseServiceProviderLanguages()
    {
        return ($this->useServiceProviderLanguages)
            ? $this->useServiceProviderLanguages->getElementValue()
            : null;
    }
}
