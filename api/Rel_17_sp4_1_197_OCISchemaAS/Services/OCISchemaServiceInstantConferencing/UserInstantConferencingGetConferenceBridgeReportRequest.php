<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingBillingCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get conference details reports.
 *         The response is either UserInstantConferencingGetConferenceBridgeReportResponse or ErrorResponse.
 */
class UserInstantConferencingGetConferenceBridgeReportRequest extends ComplexType implements ComplexInterface
{
    public    $responseType               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse';
    public    $name                       = 'UserInstantConferencingGetConferenceBridgeReportRequest';
    protected $userId                     = null;
    protected $bridgeServiceUserId        = null;
    protected $reportStartDate            = null;
    protected $reportEndDate              = null;
    protected $billingCode                = null;
    protected $reportDeliveryEmailAddress = null;

    public function __construct(
         $userId,
         $bridgeServiceUserId,
         $reportStartDate,
         $reportEndDate,
         $billingCode = null,
         $reportDeliveryEmailAddress = null
    ) {
        $this->setUserId($userId);
        $this->setBridgeServiceUserId($bridgeServiceUserId);
        $this->setReportStartDate($reportStartDate);
        $this->setReportEndDate($reportEndDate);
        $this->setBillingCode($billingCode);
        $this->setReportDeliveryEmailAddress($reportDeliveryEmailAddress);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\UserInstantConferencingGetConferenceBridgeReportResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setBridgeServiceUserId($bridgeServiceUserId = null)
    {
        if (!$bridgeServiceUserId) return $this;
        $this->bridgeServiceUserId = ($bridgeServiceUserId InstanceOf UserId)
             ? $bridgeServiceUserId
             : new UserId($bridgeServiceUserId);
        $this->bridgeServiceUserId->setName('bridgeServiceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeServiceUserId
     */
    public function getBridgeServiceUserId()
    {
        return $this->bridgeServiceUserId->getValue();
    }

    /**
     * 
     */
    public function setReportStartDate(xs:date $reportStartDate = null)
    {
        if (!$reportStartDate) return $this;
        $this->reportStartDate->setName('reportStartDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $reportStartDate
     */
    public function getReportStartDate()
    {
        return $this->reportStartDate->getValue();
    }

    /**
     * 
     */
    public function setReportEndDate(xs:date $reportEndDate = null)
    {
        if (!$reportEndDate) return $this;
        $this->reportEndDate->setName('reportEndDate');
        return $this;
    }

    /**
     * 
     * @return xs:date $reportEndDate
     */
    public function getReportEndDate()
    {
        return $this->reportEndDate->getValue();
    }

    /**
     * 
     */
    public function setBillingCode($billingCode = null)
    {
        if (!$billingCode) return $this;
        $this->billingCode = ($billingCode InstanceOf InstantConferencingBillingCode)
             ? $billingCode
             : new InstantConferencingBillingCode($billingCode);
        $this->billingCode->setName('billingCode');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingBillingCode $billingCode
     */
    public function getBillingCode()
    {
        return $this->billingCode->getValue();
    }

    /**
     * 
     */
    public function setReportDeliveryEmailAddress($reportDeliveryEmailAddress = null)
    {
        if (!$reportDeliveryEmailAddress) return $this;
        $this->reportDeliveryEmailAddress = ($reportDeliveryEmailAddress InstanceOf EmailAddress)
             ? $reportDeliveryEmailAddress
             : new EmailAddress($reportDeliveryEmailAddress);
        $this->reportDeliveryEmailAddress->setName('reportDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $reportDeliveryEmailAddress
     */
    public function getReportDeliveryEmailAddress()
    {
        return $this->reportDeliveryEmailAddress->getValue();
    }
}
