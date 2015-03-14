<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest17.
 */
class UserVoiceMessagingUserGetVoiceManagementResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                = 'UserVoiceMessagingUserGetVoiceManagementResponse17';
    protected $isActive                            = null;
    protected $processing                          = null;
    protected $voiceMessageDeliveryEmailAddress    = null;
    protected $usePhoneMessageWaitingIndicator     = null;
    protected $sendVoiceMessageNotifyEmail         = null;
    protected $voiceMessageNotifyEmailAddress      = null;
    protected $sendCarbonCopyVoiceMessage          = null;
    protected $voiceMessageCarbonCopyEmailAddress  = null;
    protected $transferOnZeroToPhoneNumber         = null;
    protected $transferPhoneNumber                 = null;
    protected $alwaysRedirectToVoiceMail           = null;
    protected $busyRedirectToVoiceMail             = null;
    protected $noAnswerRedirectToVoiceMail         = null;
    protected $outOfPrimaryZoneRedirectToVoiceMail = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetVoiceManagementResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setProcessing($processing = null)
    {
        if (!$processing) return $this;
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
        $this->processing->setName('processing');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageProcessing $processing
     */
    public function getProcessing()
    {
        return $this->processing->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        if (!$voiceMessageDeliveryEmailAddress) return $this;
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
        $this->voiceMessageDeliveryEmailAddress->setName('voiceMessageDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageDeliveryEmailAddress
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return $this->voiceMessageDeliveryEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator = null)
    {
        if (!$usePhoneMessageWaitingIndicator) return $this;
        $this->usePhoneMessageWaitingIndicator = new PrimitiveType($usePhoneMessageWaitingIndicator);
        $this->usePhoneMessageWaitingIndicator->setName('usePhoneMessageWaitingIndicator');
        return $this;
    }

    /**
     * 
     * @return boolean $usePhoneMessageWaitingIndicator
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return $this->usePhoneMessageWaitingIndicator->getValue();
    }

    /**
     * 
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail = null)
    {
        if (!$sendVoiceMessageNotifyEmail) return $this;
        $this->sendVoiceMessageNotifyEmail = new PrimitiveType($sendVoiceMessageNotifyEmail);
        $this->sendVoiceMessageNotifyEmail->setName('sendVoiceMessageNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendVoiceMessageNotifyEmail
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return $this->sendVoiceMessageNotifyEmail->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        if (!$voiceMessageNotifyEmailAddress) return $this;
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
        $this->voiceMessageNotifyEmailAddress->setName('voiceMessageNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageNotifyEmailAddress
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return $this->voiceMessageNotifyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage = null)
    {
        if (!$sendCarbonCopyVoiceMessage) return $this;
        $this->sendCarbonCopyVoiceMessage = new PrimitiveType($sendCarbonCopyVoiceMessage);
        $this->sendCarbonCopyVoiceMessage->setName('sendCarbonCopyVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendCarbonCopyVoiceMessage
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return $this->sendCarbonCopyVoiceMessage->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        if (!$voiceMessageCarbonCopyEmailAddress) return $this;
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
        $this->voiceMessageCarbonCopyEmailAddress->setName('voiceMessageCarbonCopyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageCarbonCopyEmailAddress
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return $this->voiceMessageCarbonCopyEmailAddress->getValue();
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        if (!$transferOnZeroToPhoneNumber) return $this;
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return $this->transferOnZeroToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        if (!$transferPhoneNumber) return $this;
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return $this->transferPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        if (!$alwaysRedirectToVoiceMail) return $this;
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return $this->alwaysRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        if (!$busyRedirectToVoiceMail) return $this;
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return $this->busyRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        if (!$noAnswerRedirectToVoiceMail) return $this;
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return $this->noAnswerRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail = null)
    {
        if (!$outOfPrimaryZoneRedirectToVoiceMail) return $this;
        $this->outOfPrimaryZoneRedirectToVoiceMail = new PrimitiveType($outOfPrimaryZoneRedirectToVoiceMail);
        $this->outOfPrimaryZoneRedirectToVoiceMail->setName('outOfPrimaryZoneRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $outOfPrimaryZoneRedirectToVoiceMail
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return $this->outOfPrimaryZoneRedirectToVoiceMail->getValue();
    }
}
