<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The call center enhanced reporting scheduled report inclusions related to the Service Level thresholds
 */
class CallCenterScheduledReportServiceLevelInclusions extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterScheduledReportServiceLevelInclusions';
    protected $includeOverflowTimeTransferedInServiceLevel;
    protected $includeOtherTransfersInServiceLevel;
    protected $abandonedCallsInServiceLevel;
    protected $abandonedCallIntervalSeconds;

    public function __construct(
         $includeOverflowTimeTransferedInServiceLevel = '',
         $includeOtherTransfersInServiceLevel = '',
         $abandonedCallsInServiceLevel = '',
         $abandonedCallIntervalSeconds = null
    ) {
        $this->setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel);
        $this->setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel);
        $this->setAbandonedCallsInServiceLevel($abandonedCallsInServiceLevel);
        $this->setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds);
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
    public function setIncludeOverflowTimeTransferedInServiceLevel($includeOverflowTimeTransferedInServiceLevel = null)
    {
        $this->includeOverflowTimeTransferedInServiceLevel = new SimpleContent($includeOverflowTimeTransferedInServiceLevel);
        $this->includeOverflowTimeTransferedInServiceLevel->setElementName('includeOverflowTimeTransferedInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeOverflowTimeTransferedInServiceLevel
     */
    public function getIncludeOverflowTimeTransferedInServiceLevel()
    {
        return ($this->includeOverflowTimeTransferedInServiceLevel)
            ? $this->includeOverflowTimeTransferedInServiceLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeOtherTransfersInServiceLevel($includeOtherTransfersInServiceLevel = null)
    {
        $this->includeOtherTransfersInServiceLevel = new SimpleContent($includeOtherTransfersInServiceLevel);
        $this->includeOtherTransfersInServiceLevel->setElementName('includeOtherTransfersInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $includeOtherTransfersInServiceLevel
     */
    public function getIncludeOtherTransfersInServiceLevel()
    {
        return ($this->includeOtherTransfersInServiceLevel)
            ? $this->includeOtherTransfersInServiceLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbandonedCallsInServiceLevel($abandonedCallsInServiceLevel = null)
    {
        $this->abandonedCallsInServiceLevel = new SimpleContent($abandonedCallsInServiceLevel);
        $this->abandonedCallsInServiceLevel->setElementName('abandonedCallsInServiceLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallsInServiceLevel
     */
    public function getAbandonedCallsInServiceLevel()
    {
        return ($this->abandonedCallsInServiceLevel)
            ? $this->abandonedCallsInServiceLevel->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAbandonedCallIntervalSeconds($abandonedCallIntervalSeconds = null)
    {
        $this->abandonedCallIntervalSeconds = new SimpleContent($abandonedCallIntervalSeconds);
        $this->abandonedCallIntervalSeconds->setElementName('abandonedCallIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallIntervalSeconds
     */
    public function getAbandonedCallIntervalSeconds()
    {
        return ($this->abandonedCallIntervalSeconds)
            ? $this->abandonedCallIntervalSeconds->getElementValue()
            : null;
    }
}
