<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ChargingFunctionElementServerType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetAddressExtended;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a ChargingFunctionElement Server to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAccountingAddChargingFunctionElementServerRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccountingAddChargingFunctionElementServerRequest';
    protected $address;
    protected $isNetAddressExtended;
    protected $type;
    protected $description;

    public function __construct(
         $address = '',
         $isNetAddressExtended = '',
         $type = '',
         $description = null
    ) {
        $this->setAddress($address);
        $this->setIsNetAddressExtended($isNetAddressExtended);
        $this->setType($type);
        $this->setDescription($description);
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
    public function setAddress($address = null)
    {
        $this->address = ($address InstanceOf NetAddressExtended)
             ? $address
             : new NetAddressExtended($address);
        $this->address->setElementName('address');
        return $this;
    }

    /**
     * 
     * @return NetAddressExtended $address
     */
    public function getAddress()
    {
        return ($this->address)
            ? $this->address->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsNetAddressExtended($isNetAddressExtended = null)
    {
        $this->isNetAddressExtended = new PrimitiveType($isNetAddressExtended);
        $this->isNetAddressExtended->setElementName('isNetAddressExtended');
        return $this;
    }

    /**
     * 
     * @return boolean $isNetAddressExtended
     */
    public function getIsNetAddressExtended()
    {
        return ($this->isNetAddressExtended)
            ? $this->isNetAddressExtended->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setType($type = null)
    {
        $this->type = ($type InstanceOf ChargingFunctionElementServerType)
             ? $type
             : new ChargingFunctionElementServerType($type);
        $this->type->setElementName('type');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerType $type
     */
    public function getType()
    {
        return ($this->type)
            ? $this->type->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf ChargingFunctionElementServerDescription)
             ? $description
             : new ChargingFunctionElementServerDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return ChargingFunctionElementServerDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }
}
