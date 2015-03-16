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
 * Represents either an existing file for the application server to use, or
 *         the contents of a file to transfer with a description.
 */
class LabeledMediaFileResource extends ComplexType implements ComplexInterface
{
    public    $elementName = 'LabeledMediaFileResource';
    protected $description;
    protected $mediaType;

    public function __construct(
         $description = '',
         $mediaType = ''
    ) {
        $this->setDescription($description);
        $this->setMediaType($mediaType);
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
    public function setDescription($description = null)
    {
        $this->description = new SimpleContent($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaType($mediaType = null)
    {
        $this->mediaType = new SimpleContent($mediaType);
        $this->mediaType->setElementName('mediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $mediaType
     */
    public function getMediaType()
    {
        return ($this->mediaType)
            ? $this->mediaType->getElementValue()
            : null;
    }
}
