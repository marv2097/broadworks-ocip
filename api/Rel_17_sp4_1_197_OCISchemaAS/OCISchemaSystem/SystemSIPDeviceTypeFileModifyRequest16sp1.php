<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceTypeFileEnhancedConfigurationMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileCustomization;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementFileFormat;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementAccessURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileResource;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a sip device type file.
 *           The response is either SuccessResponse or ErrorResponse.
 */
class SystemSIPDeviceTypeFileModifyRequest16sp1 extends ComplexType implements ComplexInterface
{
    public    $name                               = 'SystemSIPDeviceTypeFileModifyRequest16sp1';
    protected $deviceType                         = null;
    protected $fileFormat                         = null;
    protected $fileCustomization                  = null;
    protected $fileSource                         = null;
    protected $uploadFile                         = null;
    protected $useHttpDigestAuthentication        = null;
    protected $macBasedFileAuthentication         = null;
    protected $userNamePasswordFileAuthentication = null;
    protected $macInNonRequestURI                 = null;
    protected $macFormatInNonRequestURI           = null;

    public function __construct(
         $deviceType,
         $fileFormat,
         $fileCustomization = null,
         $fileSource = null,
         FileResource $uploadFile = null,
         $useHttpDigestAuthentication = null,
         $macBasedFileAuthentication = null,
         $userNamePasswordFileAuthentication = null,
         $macInNonRequestURI = null,
         $macFormatInNonRequestURI = null
    ) {
        $this->setDeviceType($deviceType);
        $this->setFileFormat($fileFormat);
        $this->setFileCustomization($fileCustomization);
        $this->setFileSource($fileSource);
        $this->setUploadFile($uploadFile);
        $this->setUseHttpDigestAuthentication($useHttpDigestAuthentication);
        $this->setMacBasedFileAuthentication($macBasedFileAuthentication);
        $this->setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication);
        $this->setMacInNonRequestURI($macInNonRequestURI);
        $this->setMacFormatInNonRequestURI($macFormatInNonRequestURI);
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
    public function setDeviceType($deviceType = null)
    {
        if (!$deviceType) return $this;
        $this->deviceType = ($deviceType InstanceOf AccessDeviceType)
             ? $deviceType
             : new AccessDeviceType($deviceType);
        $this->deviceType->setName('deviceType');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceType $deviceType
     */
    public function getDeviceType()
    {
        return $this->deviceType->getValue();
    }

    /**
     * 
     */
    public function setFileFormat($fileFormat = null)
    {
        if (!$fileFormat) return $this;
        $this->fileFormat = ($fileFormat InstanceOf DeviceManagementFileFormat)
             ? $fileFormat
             : new DeviceManagementFileFormat($fileFormat);
        $this->fileFormat->setName('fileFormat');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileFormat $fileFormat
     */
    public function getFileFormat()
    {
        return $this->fileFormat->getValue();
    }

    /**
     * 
     */
    public function setFileCustomization($fileCustomization = null)
    {
        if (!$fileCustomization) return $this;
        $this->fileCustomization = ($fileCustomization InstanceOf DeviceManagementFileCustomization)
             ? $fileCustomization
             : new DeviceManagementFileCustomization($fileCustomization);
        $this->fileCustomization->setName('fileCustomization');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementFileCustomization $fileCustomization
     */
    public function getFileCustomization()
    {
        return $this->fileCustomization->getValue();
    }

    /**
     * 
     */
    public function setFileSource($fileSource = null)
    {
        if (!$fileSource) return $this;
        $this->fileSource = ($fileSource InstanceOf DeviceTypeFileEnhancedConfigurationMode)
             ? $fileSource
             : new DeviceTypeFileEnhancedConfigurationMode($fileSource);
        $this->fileSource->setName('fileSource');
        return $this;
    }

    /**
     * 
     * @return DeviceTypeFileEnhancedConfigurationMode $fileSource
     */
    public function getFileSource()
    {
        return $this->fileSource->getValue();
    }

    /**
     * 
     */
    public function setUploadFile(FileResource $uploadFile = null)
    {
        if (!$uploadFile) return $this;
        $this->uploadFile = $uploadFile;
        $this->uploadFile->setName('uploadFile');
        return $this;
    }

    /**
     * 
     * @return FileResource $uploadFile
     */
    public function getUploadFile()
    {
        return $this->uploadFile;
    }

    /**
     * 
     */
    public function setUseHttpDigestAuthentication($useHttpDigestAuthentication = null)
    {
        if (!$useHttpDigestAuthentication) return $this;
        $this->useHttpDigestAuthentication = new PrimitiveType($useHttpDigestAuthentication);
        $this->useHttpDigestAuthentication->setName('useHttpDigestAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $useHttpDigestAuthentication
     */
    public function getUseHttpDigestAuthentication()
    {
        return $this->useHttpDigestAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacBasedFileAuthentication($macBasedFileAuthentication = null)
    {
        if (!$macBasedFileAuthentication) return $this;
        $this->macBasedFileAuthentication = new PrimitiveType($macBasedFileAuthentication);
        $this->macBasedFileAuthentication->setName('macBasedFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $macBasedFileAuthentication
     */
    public function getMacBasedFileAuthentication()
    {
        return $this->macBasedFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setUserNamePasswordFileAuthentication($userNamePasswordFileAuthentication = null)
    {
        if (!$userNamePasswordFileAuthentication) return $this;
        $this->userNamePasswordFileAuthentication = new PrimitiveType($userNamePasswordFileAuthentication);
        $this->userNamePasswordFileAuthentication->setName('userNamePasswordFileAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $userNamePasswordFileAuthentication
     */
    public function getUserNamePasswordFileAuthentication()
    {
        return $this->userNamePasswordFileAuthentication->getValue();
    }

    /**
     * 
     */
    public function setMacInNonRequestURI($macInNonRequestURI = null)
    {
        if (!$macInNonRequestURI) return $this;
        $this->macInNonRequestURI = new PrimitiveType($macInNonRequestURI);
        $this->macInNonRequestURI->setName('macInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return boolean $macInNonRequestURI
     */
    public function getMacInNonRequestURI()
    {
        return $this->macInNonRequestURI->getValue();
    }

    /**
     * 
     */
    public function setMacFormatInNonRequestURI($macFormatInNonRequestURI = null)
    {
        if (!$macFormatInNonRequestURI) return $this;
        $this->macFormatInNonRequestURI = ($macFormatInNonRequestURI InstanceOf DeviceManagementAccessURI)
             ? $macFormatInNonRequestURI
             : new DeviceManagementAccessURI($macFormatInNonRequestURI);
        $this->macFormatInNonRequestURI->setName('macFormatInNonRequestURI');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementAccessURI $macFormatInNonRequestURI
     */
    public function getMacFormatInNonRequestURI()
    {
        return $this->macFormatInNonRequestURI->getValue();
    }
}
