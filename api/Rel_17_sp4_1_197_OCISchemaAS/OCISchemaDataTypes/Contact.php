<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Restrictions\MaxLength;
use Broadworks_OCIP\core\Builder\Restrictions\MinLength;
use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contact information.
 */
class Contact extends ComplexType implements ComplexInterface
{
    public    $elementName = 'Contact';
    protected $contactName;
    protected $contactNumber;
    protected $contactEmail;

    public function __construct(
         $contactName = null,
         $contactNumber = null,
         $contactEmail = null
    ) {
        $this->setContactName($contactName);
        $this->setContactNumber($contactNumber);
        $this->setContactEmail($contactEmail);
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
    public function setContactName($contactName = null)
    {
        $this->contactName = new SimpleContent($contactName);
        $this->contactName->addRestriction(new MinLength("1"));
        $this->contactName->addRestriction(new MaxLength("30"));
        $this->contactName->setElementName('contactName');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactName
     */
    public function getContactName()
    {
        return ($this->contactName)
            ? $this->contactName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactNumber($contactNumber = null)
    {
        $this->contactNumber = new SimpleContent($contactNumber);
        $this->contactNumber->addRestriction(new MinLength("1"));
        $this->contactNumber->addRestriction(new MaxLength("30"));
        $this->contactNumber->setElementName('contactNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactNumber
     */
    public function getContactNumber()
    {
        return ($this->contactNumber)
            ? $this->contactNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContactEmail($contactEmail = null)
    {
        $this->contactEmail = new SimpleContent($contactEmail);
        $this->contactEmail->setElementName('contactEmail');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $contactEmail
     */
    public function getContactEmail()
    {
        return ($this->contactEmail)
            ? $this->contactEmail->getElementValue()
            : null;
    }
}
