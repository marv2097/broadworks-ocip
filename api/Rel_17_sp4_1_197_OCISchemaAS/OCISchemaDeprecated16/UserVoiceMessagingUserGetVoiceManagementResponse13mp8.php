<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMessageProcessing;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserVoiceMessagingUserGetVoiceManagementRequest13mp8.
 *         Replaced by: UserVoiceMessagingUserGetVoiceManagementResponse17
 */
class UserVoiceMessagingUserGetVoiceManagementResponse13mp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetVoiceManagementResponse13mp8';
    protected $isActive;
    protected $processing;
    protected $voiceMessageDeliveryEmailAddress;
    protected $usePhoneMessageWaitingIndicator;
    protected $sendVoiceMessageNotifyEmail;
    protected $voiceMessageNotifyEmailAddress;
    protected $sendCarbonCopyVoiceMessage;
    protected $voiceMessageCarbonCopyEmailAddress;
    protected $transferOnZeroToPhoneNumber;
    protected $transferPhoneNumber;
    protected $alwaysRedirectToVoiceMail;
    protected $busyRedirectToVoiceMail;
    protected $noAnswerRedirectToVoiceMail;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserVoiceMessagingUserGetVoiceManagementResponse13mp8 $response
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
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProcessing($processing = null)
    {
        $this->processing = ($processing InstanceOf VoiceMessagingMessageProcessing)
             ? $processing
             : new VoiceMessagingMessageProcessing($processing);
        $this->processing->setElementName('processing');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMessageProcessing $processing
     */
    public function getProcessing()
    {
        return ($this->processing)
            ? $this->processing->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageDeliveryEmailAddress($voiceMessageDeliveryEmailAddress = null)
    {
        $this->voiceMessageDeliveryEmailAddress = ($voiceMessageDeliveryEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageDeliveryEmailAddress
             : new EmailAddress($voiceMessageDeliveryEmailAddress);
        $this->voiceMessageDeliveryEmailAddress->setElementName('voiceMessageDeliveryEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageDeliveryEmailAddress
     */
    public function getVoiceMessageDeliveryEmailAddress()
    {
        return ($this->voiceMessageDeliveryEmailAddress)
            ? $this->voiceMessageDeliveryEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUsePhoneMessageWaitingIndicator($usePhoneMessageWaitingIndicator = null)
    {
        $this->usePhoneMessageWaitingIndicator = new PrimitiveType($usePhoneMessageWaitingIndicator);
        $this->usePhoneMessageWaitingIndicator->setElementName('usePhoneMessageWaitingIndicator');
        return $this;
    }

    /**
     * 
     * @return boolean $usePhoneMessageWaitingIndicator
     */
    public function getUsePhoneMessageWaitingIndicator()
    {
        return ($this->usePhoneMessageWaitingIndicator)
            ? $this->usePhoneMessageWaitingIndicator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendVoiceMessageNotifyEmail($sendVoiceMessageNotifyEmail = null)
    {
        $this->sendVoiceMessageNotifyEmail = new PrimitiveType($sendVoiceMessageNotifyEmail);
        $this->sendVoiceMessageNotifyEmail->setElementName('sendVoiceMessageNotifyEmail');
        return $this;
    }

    /**
     * 
     * @return boolean $sendVoiceMessageNotifyEmail
     */
    public function getSendVoiceMessageNotifyEmail()
    {
        return ($this->sendVoiceMessageNotifyEmail)
            ? $this->sendVoiceMessageNotifyEmail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageNotifyEmailAddress($voiceMessageNotifyEmailAddress = null)
    {
        $this->voiceMessageNotifyEmailAddress = ($voiceMessageNotifyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageNotifyEmailAddress
             : new EmailAddress($voiceMessageNotifyEmailAddress);
        $this->voiceMessageNotifyEmailAddress->setElementName('voiceMessageNotifyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageNotifyEmailAddress
     */
    public function getVoiceMessageNotifyEmailAddress()
    {
        return ($this->voiceMessageNotifyEmailAddress)
            ? $this->voiceMessageNotifyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendCarbonCopyVoiceMessage($sendCarbonCopyVoiceMessage = null)
    {
        $this->sendCarbonCopyVoiceMessage = new PrimitiveType($sendCarbonCopyVoiceMessage);
        $this->sendCarbonCopyVoiceMessage->setElementName('sendCarbonCopyVoiceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendCarbonCopyVoiceMessage
     */
    public function getSendCarbonCopyVoiceMessage()
    {
        return ($this->sendCarbonCopyVoiceMessage)
            ? $this->sendCarbonCopyVoiceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessageCarbonCopyEmailAddress($voiceMessageCarbonCopyEmailAddress = null)
    {
        $this->voiceMessageCarbonCopyEmailAddress = ($voiceMessageCarbonCopyEmailAddress InstanceOf EmailAddress)
             ? $voiceMessageCarbonCopyEmailAddress
             : new EmailAddress($voiceMessageCarbonCopyEmailAddress);
        $this->voiceMessageCarbonCopyEmailAddress->setElementName('voiceMessageCarbonCopyEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $voiceMessageCarbonCopyEmailAddress
     */
    public function getVoiceMessageCarbonCopyEmailAddress()
    {
        return ($this->voiceMessageCarbonCopyEmailAddress)
            ? $this->voiceMessageCarbonCopyEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferOnZeroToPhoneNumber($transferOnZeroToPhoneNumber = null)
    {
        $this->transferOnZeroToPhoneNumber = new PrimitiveType($transferOnZeroToPhoneNumber);
        $this->transferOnZeroToPhoneNumber->setElementName('transferOnZeroToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return boolean $transferOnZeroToPhoneNumber
     */
    public function getTransferOnZeroToPhoneNumber()
    {
        return ($this->transferOnZeroToPhoneNumber)
            ? $this->transferOnZeroToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransferPhoneNumber($transferPhoneNumber = null)
    {
        $this->transferPhoneNumber = ($transferPhoneNumber InstanceOf OutgoingDN)
             ? $transferPhoneNumber
             : new OutgoingDN($transferPhoneNumber);
        $this->transferPhoneNumber->setElementName('transferPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $transferPhoneNumber
     */
    public function getTransferPhoneNumber()
    {
        return ($this->transferPhoneNumber)
            ? $this->transferPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setElementName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return ($this->alwaysRedirectToVoiceMail)
            ? $this->alwaysRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setElementName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return ($this->busyRedirectToVoiceMail)
            ? $this->busyRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setElementName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return ($this->noAnswerRedirectToVoiceMail)
            ? $this->noAnswerRedirectToVoiceMail->getElementValue()
            : null;
    }
}
