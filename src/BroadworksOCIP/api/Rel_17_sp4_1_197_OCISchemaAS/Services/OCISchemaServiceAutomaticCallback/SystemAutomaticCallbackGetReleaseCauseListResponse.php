<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackReleaseCause;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetReleaseCauseListRequest.
 */
class SystemAutomaticCallbackGetReleaseCauseListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackGetReleaseCauseListResponse';
    protected $releaseCause;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\SystemAutomaticCallbackGetReleaseCauseListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setReleaseCause($releaseCause = null)
    {
        $this->releaseCause = ($releaseCause InstanceOf AutomaticCallbackReleaseCause)
             ? $releaseCause
             : new AutomaticCallbackReleaseCause($releaseCause);
        $this->releaseCause->setElementName('releaseCause');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackReleaseCause $releaseCause
     */
    public function getReleaseCause()
    {
        return ($this->releaseCause)
            ? $this->releaseCause->getElementValue()
            : null;
    }
}
