<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an event from a system schedule.
 *         The response is either a SystemScheduleGetEventResponse or an ErrorResponse.
 */
class SystemScheduleGetEventRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemScheduleGetEventResponse';
    public    $elementName = 'SystemScheduleGetEventRequest';
    protected $scheduleKey;
    protected $eventName;

    public function __construct(
         $scheduleKey = '',
         $eventName = ''
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemScheduleGetEventResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey = ($scheduleKey InstanceOf ScheduleKey)
             ? $scheduleKey
             : new ScheduleKey($scheduleKey);
        $this->scheduleKey->setElementName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleKey $scheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * 
     */
    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
        $this->eventName->setElementName('eventName');
        return $this;
    }

    /**
     * 
     * @return EventName $eventName
     */
    public function getEventName()
    {
        return ($this->eventName)
            ? $this->eventName->getElementValue()
            : null;
    }
}
