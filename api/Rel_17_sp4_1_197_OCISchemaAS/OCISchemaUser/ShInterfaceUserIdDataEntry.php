<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * ShInterface User Id Data Entry.
 */
class ShInterfaceUserIdDataEntry extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ShInterfaceUserIdDataEntry';
    protected $userType;
    protected $publicUserIdentity;
    protected $endpointType;
    protected $SCSCFName;
    protected $IMSUserState;

    public function __construct(
         $userType = '',
         $publicUserIdentity = '',
         $endpointType = '',
         $SCSCFName = null,
         $IMSUserState = ''
    ) {
        $this->setUserType($userType);
        $this->setPublicUserIdentity($publicUserIdentity);
        $this->setEndpointType($endpointType);
        $this->setSCSCFName($SCSCFName);
        $this->setIMSUserState($IMSUserState);
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
    public function setUserType($userType = null)
    {
        $this->userType = new SimpleContent($userType);
        $this->userType->setElementName('userType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $userType
     */
    public function getUserType()
    {
        return ($this->userType)
            ? $this->userType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicUserIdentity($publicUserIdentity = null)
    {
        $this->publicUserIdentity = new SimpleContent($publicUserIdentity);
        $this->publicUserIdentity->setElementName('publicUserIdentity');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $publicUserIdentity
     */
    public function getPublicUserIdentity()
    {
        return ($this->publicUserIdentity)
            ? $this->publicUserIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndpointType($endpointType = null)
    {
        $this->endpointType = new SimpleContent($endpointType);
        $this->endpointType->setElementName('endpointType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $endpointType
     */
    public function getEndpointType()
    {
        return ($this->endpointType)
            ? $this->endpointType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSCSCFName($SCSCFName = null)
    {
        $this->SCSCFName = new SimpleContent($SCSCFName);
        $this->SCSCFName->setElementName('SCSCFName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $SCSCFName
     */
    public function getSCSCFName()
    {
        return ($this->SCSCFName)
            ? $this->SCSCFName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIMSUserState($IMSUserState = null)
    {
        $this->IMSUserState = new SimpleContent($IMSUserState);
        $this->IMSUserState->setElementName('IMSUserState');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $IMSUserState
     */
    public function getIMSUserState()
    {
        return ($this->IMSUserState)
            ? $this->IMSUserState->getElementValue()
            : null;
    }
}
