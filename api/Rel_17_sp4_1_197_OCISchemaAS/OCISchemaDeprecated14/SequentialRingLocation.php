<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Sequential Ring Location.
 *         Replaced By: SequentialRingLocation14sp4
 */
class SequentialRingLocation extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SequentialRingLocation';
    protected $phoneNumber;
    protected $numberOfRings;

    public function __construct(
         $phoneNumber = null,
         $numberOfRings = ''
    ) {
        $this->setPhoneNumber($phoneNumber);
        $this->setNumberOfRings($numberOfRings);
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
    public function setPhoneNumber($phoneNumber = null)
    {
        $this->phoneNumber = new SimpleContent($phoneNumber);
        $this->phoneNumber->setElementName('phoneNumber');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $phoneNumber
     */
    public function getPhoneNumber()
    {
        return ($this->phoneNumber)
            ? $this->phoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberOfRings($numberOfRings = null)
    {
        $this->numberOfRings = new SimpleContent($numberOfRings);
        $this->numberOfRings->setElementName('numberOfRings');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberOfRings
     */
    public function getNumberOfRings()
    {
        return ($this->numberOfRings)
            ? $this->numberOfRings->getElementValue()
            : null;
    }
}
