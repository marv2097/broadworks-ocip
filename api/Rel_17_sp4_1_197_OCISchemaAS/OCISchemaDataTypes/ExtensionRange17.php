<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Extension range. The minimum and maximum values are inclusive.
 */
class ExtensionRange17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ExtensionRange17';
    protected $minExtension;
    protected $maxExtension;

    public function __construct(
         $minExtension = '',
         $maxExtension = ''
    ) {
        $this->setMinExtension($minExtension);
        $this->setMaxExtension($maxExtension);
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
    public function setMinExtension($minExtension = null)
    {
        $this->minExtension = new SimpleContent($minExtension);
        $this->minExtension->setElementName('minExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minExtension
     */
    public function getMinExtension()
    {
        return ($this->minExtension)
            ? $this->minExtension->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxExtension($maxExtension = null)
    {
        $this->maxExtension = new SimpleContent($maxExtension);
        $this->maxExtension->setElementName('maxExtension');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $maxExtension
     */
    public function getMaxExtension()
    {
        return ($this->maxExtension)
            ? $this->maxExtension->getElementValue()
            : null;
    }
}
