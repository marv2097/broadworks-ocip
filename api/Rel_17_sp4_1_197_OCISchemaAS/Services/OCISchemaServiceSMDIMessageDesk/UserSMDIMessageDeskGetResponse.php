<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIMessageDeskNumber;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserSMDIMessageDeskGetRequest.
 */
class UserSMDIMessageDeskGetResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserSMDIMessageDeskGetResponse';
    protected $isActive          = null;
    protected $messageDeskNumber = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\UserSMDIMessageDeskGetResponse $response
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
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setMessageDeskNumber($messageDeskNumber = null)
    {
        if (!$messageDeskNumber) return $this;
        $this->messageDeskNumber = ($messageDeskNumber InstanceOf SMDIMessageDeskNumber)
             ? $messageDeskNumber
             : new SMDIMessageDeskNumber($messageDeskNumber);
        $this->messageDeskNumber->setName('messageDeskNumber');
        return $this;
    }

    /**
     * 
     * @return SMDIMessageDeskNumber $messageDeskNumber
     */
    public function getMessageDeskNumber()
    {
        return $this->messageDeskNumber->getValue();
    }
}
