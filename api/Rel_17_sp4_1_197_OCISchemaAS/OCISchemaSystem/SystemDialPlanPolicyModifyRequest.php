<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DigitMap;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Dial Plan Policy.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemDialPlanPolicyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDialPlanPolicyModifyRequest';
    protected $requiresAccessCodeForPublicCalls;
    protected $allowE164PublicCalls;
    protected $preferE164NumberFormatForCallbackServices;
    protected $publicDigitMap;
    protected $privateDigitMap;

    public function __construct(
         $requiresAccessCodeForPublicCalls = null,
         $allowE164PublicCalls = null,
         $preferE164NumberFormatForCallbackServices = null,
         $publicDigitMap = null,
         $privateDigitMap = null
    ) {
        $this->setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls);
        $this->setAllowE164PublicCalls($allowE164PublicCalls);
        $this->setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices);
        $this->setPublicDigitMap($publicDigitMap);
        $this->setPrivateDigitMap($privateDigitMap);
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
    public function setRequiresAccessCodeForPublicCalls($requiresAccessCodeForPublicCalls = null)
    {
        $this->requiresAccessCodeForPublicCalls = new PrimitiveType($requiresAccessCodeForPublicCalls);
        $this->requiresAccessCodeForPublicCalls->setElementName('requiresAccessCodeForPublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $requiresAccessCodeForPublicCalls
     */
    public function getRequiresAccessCodeForPublicCalls()
    {
        return ($this->requiresAccessCodeForPublicCalls)
            ? $this->requiresAccessCodeForPublicCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowE164PublicCalls($allowE164PublicCalls = null)
    {
        $this->allowE164PublicCalls = new PrimitiveType($allowE164PublicCalls);
        $this->allowE164PublicCalls->setElementName('allowE164PublicCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowE164PublicCalls
     */
    public function getAllowE164PublicCalls()
    {
        return ($this->allowE164PublicCalls)
            ? $this->allowE164PublicCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPreferE164NumberFormatForCallbackServices($preferE164NumberFormatForCallbackServices = null)
    {
        $this->preferE164NumberFormatForCallbackServices = new PrimitiveType($preferE164NumberFormatForCallbackServices);
        $this->preferE164NumberFormatForCallbackServices->setElementName('preferE164NumberFormatForCallbackServices');
        return $this;
    }

    /**
     * 
     * @return boolean $preferE164NumberFormatForCallbackServices
     */
    public function getPreferE164NumberFormatForCallbackServices()
    {
        return ($this->preferE164NumberFormatForCallbackServices)
            ? $this->preferE164NumberFormatForCallbackServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPublicDigitMap($publicDigitMap = null)
    {
        $this->publicDigitMap = ($publicDigitMap InstanceOf DigitMap)
             ? $publicDigitMap
             : new DigitMap($publicDigitMap);
        $this->publicDigitMap->setElementName('publicDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $publicDigitMap
     */
    public function getPublicDigitMap()
    {
        return ($this->publicDigitMap)
            ? $this->publicDigitMap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrivateDigitMap($privateDigitMap = null)
    {
        $this->privateDigitMap = ($privateDigitMap InstanceOf DigitMap)
             ? $privateDigitMap
             : new DigitMap($privateDigitMap);
        $this->privateDigitMap->setElementName('privateDigitMap');
        return $this;
    }

    /**
     * 
     * @return DigitMap $privateDigitMap
     */
    public function getPrivateDigitMap()
    {
        return ($this->privateDigitMap)
            ? $this->privateDigitMap->getElementValue()
            : null;
    }
}
