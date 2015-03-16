<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExpensiveCallNotificationPostAnnouncementDelaySeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the expensive call notification service parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExpensiveCallNotificationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemExpensiveCallNotificationModifyRequest';
    protected $enablePostAnnouncementDelayTimer;
    protected $postAnnouncementDelaySeconds;

    public function __construct(
         $enablePostAnnouncementDelayTimer = null,
         $postAnnouncementDelaySeconds = null
    ) {
        $this->setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer);
        $this->setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
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
    public function setEnablePostAnnouncementDelayTimer($enablePostAnnouncementDelayTimer = null)
    {
        $this->enablePostAnnouncementDelayTimer = new PrimitiveType($enablePostAnnouncementDelayTimer);
        $this->enablePostAnnouncementDelayTimer->setElementName('enablePostAnnouncementDelayTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enablePostAnnouncementDelayTimer
     */
    public function getEnablePostAnnouncementDelayTimer()
    {
        return ($this->enablePostAnnouncementDelayTimer)
            ? $this->enablePostAnnouncementDelayTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds = null)
    {
        $this->postAnnouncementDelaySeconds = ($postAnnouncementDelaySeconds InstanceOf ExpensiveCallNotificationPostAnnouncementDelaySeconds)
             ? $postAnnouncementDelaySeconds
             : new ExpensiveCallNotificationPostAnnouncementDelaySeconds($postAnnouncementDelaySeconds);
        $this->postAnnouncementDelaySeconds->setElementName('postAnnouncementDelaySeconds');
        return $this;
    }

    /**
     * 
     * @return ExpensiveCallNotificationPostAnnouncementDelaySeconds $postAnnouncementDelaySeconds
     */
    public function getPostAnnouncementDelaySeconds()
    {
        return ($this->postAnnouncementDelaySeconds)
            ? $this->postAnnouncementDelaySeconds->getElementValue()
            : null;
    }
}
