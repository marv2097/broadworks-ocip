<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementPauseBetweenFileRebuildMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPFileTransferTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementFTPConnectTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\DeviceManagementMaxBusyTimeMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCPEConfigParametersGetListRequest14sp6.
 *         Contains a list of system CPE Config parameters.
 */
class SystemCPEConfigParametersGetResponse14sp6 extends ComplexType implements ComplexInterface
{
    public    $name                                = 'SystemCPEConfigParametersGetResponse14sp6';
    protected $enableIPDeviceManagement            = null;
    protected $ftpConnectTimeoutSeconds            = null;
    protected $ftpFileTransferTimeoutSeconds       = null;
    protected $pauseBetweenFileRebuildMilliseconds = null;
    protected $maxBusyTimeMinutes                  = null;
    protected $deviceAccessAppServerClusterName    = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCPEConfigParametersGetResponse14sp6 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableIPDeviceManagement($enableIPDeviceManagement = null)
    {
        if (!$enableIPDeviceManagement) return $this;
        $this->enableIPDeviceManagement = new PrimitiveType($enableIPDeviceManagement);
        $this->enableIPDeviceManagement->setName('enableIPDeviceManagement');
        return $this;
    }

    /**
     * 
     * @return boolean $enableIPDeviceManagement
     */
    public function getEnableIPDeviceManagement()
    {
        return $this->enableIPDeviceManagement->getValue();
    }

    /**
     * 
     */
    public function setFtpConnectTimeoutSeconds($ftpConnectTimeoutSeconds = null)
    {
        if (!$ftpConnectTimeoutSeconds) return $this;
        $this->ftpConnectTimeoutSeconds = ($ftpConnectTimeoutSeconds InstanceOf DeviceManagementFTPConnectTimeoutSeconds)
             ? $ftpConnectTimeoutSeconds
             : new DeviceManagementFTPConnectTimeoutSeconds($ftpConnectTimeoutSeconds);
        $this->ftpConnectTimeoutSeconds->setName('ftpConnectTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPConnectTimeoutSeconds $ftpConnectTimeoutSeconds
     */
    public function getFtpConnectTimeoutSeconds()
    {
        return $this->ftpConnectTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setFtpFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds = null)
    {
        if (!$ftpFileTransferTimeoutSeconds) return $this;
        $this->ftpFileTransferTimeoutSeconds = ($ftpFileTransferTimeoutSeconds InstanceOf DeviceManagementFTPFileTransferTimeoutSeconds)
             ? $ftpFileTransferTimeoutSeconds
             : new DeviceManagementFTPFileTransferTimeoutSeconds($ftpFileTransferTimeoutSeconds);
        $this->ftpFileTransferTimeoutSeconds->setName('ftpFileTransferTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFTPFileTransferTimeoutSeconds $ftpFileTransferTimeoutSeconds
     */
    public function getFtpFileTransferTimeoutSeconds()
    {
        return $this->ftpFileTransferTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds = null)
    {
        if (!$pauseBetweenFileRebuildMilliseconds) return $this;
        $this->pauseBetweenFileRebuildMilliseconds = ($pauseBetweenFileRebuildMilliseconds InstanceOf DeviceManagementPauseBetweenFileRebuildMilliseconds)
             ? $pauseBetweenFileRebuildMilliseconds
             : new DeviceManagementPauseBetweenFileRebuildMilliseconds($pauseBetweenFileRebuildMilliseconds);
        $this->pauseBetweenFileRebuildMilliseconds->setName('pauseBetweenFileRebuildMilliseconds');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementPauseBetweenFileRebuildMilliseconds $pauseBetweenFileRebuildMilliseconds
     */
    public function getPauseBetweenFileRebuildMilliseconds()
    {
        return $this->pauseBetweenFileRebuildMilliseconds->getValue();
    }

    /**
     * 
     */
    public function setMaxBusyTimeMinutes($maxBusyTimeMinutes = null)
    {
        if (!$maxBusyTimeMinutes) return $this;
        $this->maxBusyTimeMinutes = ($maxBusyTimeMinutes InstanceOf DeviceManagementMaxBusyTimeMinutes)
             ? $maxBusyTimeMinutes
             : new DeviceManagementMaxBusyTimeMinutes($maxBusyTimeMinutes);
        $this->maxBusyTimeMinutes->setName('maxBusyTimeMinutes');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementMaxBusyTimeMinutes $maxBusyTimeMinutes
     */
    public function getMaxBusyTimeMinutes()
    {
        return $this->maxBusyTimeMinutes->getValue();
    }

    /**
     * 
     */
    public function setDeviceAccessAppServerClusterName($deviceAccessAppServerClusterName = null)
    {
        if (!$deviceAccessAppServerClusterName) return $this;
        $this->deviceAccessAppServerClusterName = ($deviceAccessAppServerClusterName InstanceOf NetAddress)
             ? $deviceAccessAppServerClusterName
             : new NetAddress($deviceAccessAppServerClusterName);
        $this->deviceAccessAppServerClusterName->setName('deviceAccessAppServerClusterName');
        return $this;
    }

    /**
     * 
     * @return NetAddress $deviceAccessAppServerClusterName
     */
    public function getDeviceAccessAppServerClusterName()
    {
        return $this->deviceAccessAppServerClusterName->getValue();
    }
}
