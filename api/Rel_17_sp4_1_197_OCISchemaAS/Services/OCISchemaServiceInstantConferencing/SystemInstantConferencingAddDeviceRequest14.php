<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add an Instant Conferencing device to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingAddDeviceRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemInstantConferencingAddDeviceRequest14';
    protected $deviceName;
    protected $clusterNetAddress;
    protected $signalingPort;
    protected $description;
    protected $transportProtocol;

    public function __construct(
         $deviceName = '',
         $clusterNetAddress = null,
         $signalingPort = null,
         $description = null,
         $transportProtocol = ''
    ) {
        $this->setDeviceName($deviceName);
        $this->setClusterNetAddress($clusterNetAddress);
        $this->setSignalingPort($signalingPort);
        $this->setDescription($description);
        $this->setTransportProtocol($transportProtocol);
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
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setClusterNetAddress($clusterNetAddress = null)
    {
        $this->clusterNetAddress = ($clusterNetAddress InstanceOf NetAddress)
             ? $clusterNetAddress
             : new NetAddress($clusterNetAddress);
        $this->clusterNetAddress->setElementName('clusterNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $clusterNetAddress
     */
    public function getClusterNetAddress()
    {
        return ($this->clusterNetAddress)
            ? $this->clusterNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port1025)
             ? $signalingPort
             : new Port1025($signalingPort);
        $this->signalingPort->setElementName('signalingPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $signalingPort
     */
    public function getSignalingPort()
    {
        return ($this->signalingPort)
            ? $this->signalingPort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf InstantConferencingDeviceDescription)
             ? $description
             : new InstantConferencingDeviceDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDeviceDescription $description
     */
    public function getDescription()
    {
        return ($this->description)
            ? $this->description->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setElementName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol)
            ? $this->transportProtocol->getElementValue()
            : null;
    }
}
