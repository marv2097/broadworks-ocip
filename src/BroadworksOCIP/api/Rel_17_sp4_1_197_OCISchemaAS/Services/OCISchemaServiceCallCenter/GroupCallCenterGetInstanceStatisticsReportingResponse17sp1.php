<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsCollectionPeriodMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSource17sp1;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupCallCenterGetInstanceStatisticsReportingRequest17sp1.
 *         Contains Call Center statistics reporting settings.
 */
class GroupCallCenterGetInstanceStatisticsReportingResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterGetInstanceStatisticsReportingResponse17sp1';
    protected $generateDailyReport;
    protected $collectionPeriodMinutes;
    protected $reportingEmailAddress1;
    protected $reportingEmailAddress2;
    protected $statisticsSource;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetInstanceStatisticsReportingResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGenerateDailyReport($generateDailyReport = null)
    {
        $this->generateDailyReport = new PrimitiveType($generateDailyReport);
        $this->generateDailyReport->setElementName('generateDailyReport');
        return $this;
    }

    /**
     * 
     * @return boolean $generateDailyReport
     */
    public function getGenerateDailyReport()
    {
        return ($this->generateDailyReport)
            ? $this->generateDailyReport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCollectionPeriodMinutes($collectionPeriodMinutes = null)
    {
        $this->collectionPeriodMinutes = ($collectionPeriodMinutes InstanceOf CallCenterStatisticsCollectionPeriodMinutes)
             ? $collectionPeriodMinutes
             : new CallCenterStatisticsCollectionPeriodMinutes($collectionPeriodMinutes);
        $this->collectionPeriodMinutes->setElementName('collectionPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsCollectionPeriodMinutes $collectionPeriodMinutes
     */
    public function getCollectionPeriodMinutes()
    {
        return ($this->collectionPeriodMinutes)
            ? $this->collectionPeriodMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress1($reportingEmailAddress1 = null)
    {
        $this->reportingEmailAddress1 = ($reportingEmailAddress1 InstanceOf EmailAddress)
             ? $reportingEmailAddress1
             : new EmailAddress($reportingEmailAddress1);
        $this->reportingEmailAddress1->setElementName('reportingEmailAddress1');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress1
     */
    public function getReportingEmailAddress1()
    {
        return ($this->reportingEmailAddress1)
            ? $this->reportingEmailAddress1->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingEmailAddress2($reportingEmailAddress2 = null)
    {
        $this->reportingEmailAddress2 = ($reportingEmailAddress2 InstanceOf EmailAddress)
             ? $reportingEmailAddress2
             : new EmailAddress($reportingEmailAddress2);
        $this->reportingEmailAddress2->setElementName('reportingEmailAddress2');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportingEmailAddress2
     */
    public function getReportingEmailAddress2()
    {
        return ($this->reportingEmailAddress2)
            ? $this->reportingEmailAddress2->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatisticsSource($statisticsSource = null)
    {
        $this->statisticsSource = ($statisticsSource InstanceOf CallCenterStatisticsSource17sp1)
             ? $statisticsSource
             : new CallCenterStatisticsSource17sp1($statisticsSource);
        $this->statisticsSource->setElementName('statisticsSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSource17sp1 $statisticsSource
     */
    public function getStatisticsSource()
    {
        return ($this->statisticsSource)
            ? $this->statisticsSource->getElementValue()
            : null;
    }
}
