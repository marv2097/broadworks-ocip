<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerProvisioningPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementUserNamePassword16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevicePhysicalLocation;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MobilityManagerServiceKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceSerialNumber;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMACAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a specified group access device.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupAccessDeviceModifyRequest14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAccessDeviceModifyRequest14';
    protected $serviceProviderId;
    protected $groupId;
    protected $deviceName;
    protected $protocol;
    protected $netAddress;
    protected $port;
    protected $outboundProxyServerNetAddress;
    protected $stunServerNetAddress;
    protected $macAddress;
    protected $serialNumber;
    protected $description;
    protected $configurationMode;
    protected $configurationFile;
    protected $physicalLocation;
    protected $transportProtocol;
    protected $mobilityManagerProvisioningURL;
    protected $mobilityManagerProvisioningUserName;
    protected $mobilityManagerProvisioningPassword;
    protected $mobilityManagerDefaultOriginatingServiceKey;
    protected $mobilityManagerDefaultTerminatingServiceKey;
    protected $useCustomUserNamePassword;
    protected $accessDeviceCredentials;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $deviceName = '',
         $protocol = null,
         $netAddress = null,
         $port = null,
         $outboundProxyServerNetAddress = null,
         $stunServerNetAddress = null,
         $macAddress = null,
         $serialNumber = null,
         $description = null,
         $configurationMode = null,
         $configurationFile = null,
         $physicalLocation = null,
         $transportProtocol = null,
         $mobilityManagerProvisioningURL = null,
         $mobilityManagerProvisioningUserName = null,
         $mobilityManagerProvisioningPassword = null,
         $mobilityManagerDefaultOriginatingServiceKey = null,
         $mobilityManagerDefaultTerminatingServiceKey = null,
         $useCustomUserNamePassword = null,
         $accessDeviceCredentials = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDeviceName($deviceName);
        $this->setProtocol($protocol);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setOutboundProxyServerNetAddress($outboundProxyServerNetAddress);
        $this->setStunServerNetAddress($stunServerNetAddress);
        $this->setMacAddress($macAddress);
        $this->setSerialNumber($serialNumber);
        $this->setDescription($description);
        $this->setConfigurationMode($configurationMode);
        $this->setConfigurationFile($configurationFile);
        $this->setPhysicalLocation($physicalLocation);
        $this->setTransportProtocol($transportProtocol);
        $this->setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL);
        $this->setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
        $this->setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->setUseCustomUserNamePassword($useCustomUserNamePassword);
        $this->setAccessDeviceCredentials($accessDeviceCredentials);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
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
    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf AccessDeviceProtocol)
             ? $protocol
             : new AccessDeviceProtocol($protocol);
        $this->protocol->setElementName('protocol');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceProtocol $protocol
     */
    public function getProtocol()
    {
        return ($this->protocol)
            ? $this->protocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
        $this->netAddress->setElementName('netAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $netAddress
     */
    public function getNetAddress()
    {
        return ($this->netAddress)
            ? $this->netAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port1025 $port
     */
    public function getPort()
    {
        return ($this->port)
            ? $this->port->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutboundProxyServerNetAddress($outboundProxyServerNetAddress = null)
    {
        $this->outboundProxyServerNetAddress = ($outboundProxyServerNetAddress InstanceOf NetAddress)
             ? $outboundProxyServerNetAddress
             : new NetAddress($outboundProxyServerNetAddress);
        $this->outboundProxyServerNetAddress->setElementName('outboundProxyServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $outboundProxyServerNetAddress
     */
    public function getOutboundProxyServerNetAddress()
    {
        return ($this->outboundProxyServerNetAddress)
            ? $this->outboundProxyServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStunServerNetAddress($stunServerNetAddress = null)
    {
        $this->stunServerNetAddress = ($stunServerNetAddress InstanceOf NetAddress)
             ? $stunServerNetAddress
             : new NetAddress($stunServerNetAddress);
        $this->stunServerNetAddress->setElementName('stunServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $stunServerNetAddress
     */
    public function getStunServerNetAddress()
    {
        return ($this->stunServerNetAddress)
            ? $this->stunServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMacAddress($macAddress = null)
    {
        $this->macAddress = ($macAddress InstanceOf AccessDeviceMACAddress)
             ? $macAddress
             : new AccessDeviceMACAddress($macAddress);
        $this->macAddress->setElementName('macAddress');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMACAddress $macAddress
     */
    public function getMacAddress()
    {
        return ($this->macAddress)
            ? $this->macAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSerialNumber($serialNumber = null)
    {
        $this->serialNumber = ($serialNumber InstanceOf AccessDeviceSerialNumber)
             ? $serialNumber
             : new AccessDeviceSerialNumber($serialNumber);
        $this->serialNumber->setElementName('serialNumber');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceSerialNumber $serialNumber
     */
    public function getSerialNumber()
    {
        return ($this->serialNumber)
            ? $this->serialNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf AccessDeviceDescription)
             ? $description
             : new AccessDeviceDescription($description);
        $this->description->setElementName('description');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceDescription $description
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
    public function setConfigurationMode($configurationMode = null)
    {
        $this->configurationMode = ($configurationMode InstanceOf AccessDeviceEnhancedConfigurationMode)
             ? $configurationMode
             : new AccessDeviceEnhancedConfigurationMode($configurationMode);
        $this->configurationMode->setElementName('configurationMode');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEnhancedConfigurationMode $configurationMode
     */
    public function getConfigurationMode()
    {
        return ($this->configurationMode)
            ? $this->configurationMode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConfigurationFile(FileResource $configurationFile = null)
    {
        $this->configurationFile = ($configurationFile InstanceOf FileResource)
             ? $configurationFile
             : new FileResource($configurationFile);
        $this->configurationFile->setElementName('configurationFile');
        return $this;
    }

    /**
     * 
     * @return FileResource $configurationFile
     */
    public function getConfigurationFile()
    {
        return $this->configurationFile;
    }

    /**
     * 
     */
    public function setPhysicalLocation($physicalLocation = null)
    {
        $this->physicalLocation = ($physicalLocation InstanceOf AccessDevicePhysicalLocation)
             ? $physicalLocation
             : new AccessDevicePhysicalLocation($physicalLocation);
        $this->physicalLocation->setElementName('physicalLocation');
        return $this;
    }

    /**
     * 
     * @return AccessDevicePhysicalLocation $physicalLocation
     */
    public function getPhysicalLocation()
    {
        return ($this->physicalLocation)
            ? $this->physicalLocation->getElementValue()
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

    /**
     * 
     */
    public function setMobilityManagerProvisioningURL($mobilityManagerProvisioningURL = null)
    {
        $this->mobilityManagerProvisioningURL = ($mobilityManagerProvisioningURL InstanceOf URL)
             ? $mobilityManagerProvisioningURL
             : new URL($mobilityManagerProvisioningURL);
        $this->mobilityManagerProvisioningURL->setElementName('mobilityManagerProvisioningURL');
        return $this;
    }

    /**
     * 
     * @return URL $mobilityManagerProvisioningURL
     */
    public function getMobilityManagerProvisioningURL()
    {
        return ($this->mobilityManagerProvisioningURL)
            ? $this->mobilityManagerProvisioningURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName = null)
    {
        $this->mobilityManagerProvisioningUserName = ($mobilityManagerProvisioningUserName InstanceOf MobilityManagerProvisioningUserName)
             ? $mobilityManagerProvisioningUserName
             : new MobilityManagerProvisioningUserName($mobilityManagerProvisioningUserName);
        $this->mobilityManagerProvisioningUserName->setElementName('mobilityManagerProvisioningUserName');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningUserName $mobilityManagerProvisioningUserName
     */
    public function getMobilityManagerProvisioningUserName()
    {
        return ($this->mobilityManagerProvisioningUserName)
            ? $this->mobilityManagerProvisioningUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword = null)
    {
        $this->mobilityManagerProvisioningPassword = ($mobilityManagerProvisioningPassword InstanceOf MobilityManagerProvisioningPassword)
             ? $mobilityManagerProvisioningPassword
             : new MobilityManagerProvisioningPassword($mobilityManagerProvisioningPassword);
        $this->mobilityManagerProvisioningPassword->setElementName('mobilityManagerProvisioningPassword');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerProvisioningPassword $mobilityManagerProvisioningPassword
     */
    public function getMobilityManagerProvisioningPassword()
    {
        return ($this->mobilityManagerProvisioningPassword)
            ? $this->mobilityManagerProvisioningPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultOriginatingServiceKey($mobilityManagerDefaultOriginatingServiceKey = null)
    {
        $this->mobilityManagerDefaultOriginatingServiceKey = ($mobilityManagerDefaultOriginatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultOriginatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultOriginatingServiceKey);
        $this->mobilityManagerDefaultOriginatingServiceKey->setElementName('mobilityManagerDefaultOriginatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultOriginatingServiceKey
     */
    public function getMobilityManagerDefaultOriginatingServiceKey()
    {
        return ($this->mobilityManagerDefaultOriginatingServiceKey)
            ? $this->mobilityManagerDefaultOriginatingServiceKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMobilityManagerDefaultTerminatingServiceKey($mobilityManagerDefaultTerminatingServiceKey = null)
    {
        $this->mobilityManagerDefaultTerminatingServiceKey = ($mobilityManagerDefaultTerminatingServiceKey InstanceOf MobilityManagerServiceKey)
             ? $mobilityManagerDefaultTerminatingServiceKey
             : new MobilityManagerServiceKey($mobilityManagerDefaultTerminatingServiceKey);
        $this->mobilityManagerDefaultTerminatingServiceKey->setElementName('mobilityManagerDefaultTerminatingServiceKey');
        return $this;
    }

    /**
     * 
     * @return MobilityManagerServiceKey $mobilityManagerDefaultTerminatingServiceKey
     */
    public function getMobilityManagerDefaultTerminatingServiceKey()
    {
        return ($this->mobilityManagerDefaultTerminatingServiceKey)
            ? $this->mobilityManagerDefaultTerminatingServiceKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseCustomUserNamePassword($useCustomUserNamePassword = null)
    {
        $this->useCustomUserNamePassword = new PrimitiveType($useCustomUserNamePassword);
        $this->useCustomUserNamePassword->setElementName('useCustomUserNamePassword');
        return $this;
    }

    /**
     * 
     * @return boolean $useCustomUserNamePassword
     */
    public function getUseCustomUserNamePassword()
    {
        return ($this->useCustomUserNamePassword)
            ? $this->useCustomUserNamePassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAccessDeviceCredentials(DeviceManagementUserNamePassword16 $accessDeviceCredentials = null)
    {
        $this->accessDeviceCredentials = ($accessDeviceCredentials InstanceOf DeviceManagementUserNamePassword16)
             ? $accessDeviceCredentials
             : new DeviceManagementUserNamePassword16($accessDeviceCredentials);
        $this->accessDeviceCredentials->setElementName('accessDeviceCredentials');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementUserNamePassword16 $accessDeviceCredentials
     */
    public function getAccessDeviceCredentials()
    {
        return $this->accessDeviceCredentials;
    }
}
