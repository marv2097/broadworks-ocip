<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\FileRepositoryProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileRepositoryName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CPEFileDirectory;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a file repository.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemFileRepositoryDeviceModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemFileRepositoryDeviceModifyRequest';
    protected $name;
    protected $rootDirectory;
    protected $secure;
    protected $netAddress;
    protected $ftpPassive;
    protected $protocol;
    protected $port;
    protected $ftpRemoteVerification;

    public function __construct(
         $name = '',
         $rootDirectory = null,
         $secure = null,
         $netAddress = null,
         $ftpPassive = null,
         $protocol = null,
         $port = null,
         $ftpRemoteVerification = null
    ) {
        $this->setName($name);
        $this->setRootDirectory($rootDirectory);
        $this->setSecure($secure);
        $this->setNetAddress($netAddress);
        $this->setFtpPassive($ftpPassive);
        $this->setProtocol($protocol);
        $this->setPort($port);
        $this->setFtpRemoteVerification($ftpRemoteVerification);
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
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf FileRepositoryName)
             ? $name
             : new FileRepositoryName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRootDirectory($rootDirectory = null)
    {
        $this->rootDirectory = ($rootDirectory InstanceOf CPEFileDirectory)
             ? $rootDirectory
             : new CPEFileDirectory($rootDirectory);
        $this->rootDirectory->setElementName('rootDirectory');
        return $this;
    }

    /**
     * 
     * @return CPEFileDirectory $rootDirectory
     */
    public function getRootDirectory()
    {
        return ($this->rootDirectory)
            ? $this->rootDirectory->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSecure($secure = null)
    {
        $this->secure = new PrimitiveType($secure);
        $this->secure->setElementName('secure');
        return $this;
    }

    /**
     * 
     * @return boolean $secure
     */
    public function getSecure()
    {
        return ($this->secure)
            ? $this->secure->getElementValue()
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
    public function setFtpPassive($ftpPassive = null)
    {
        $this->ftpPassive = new PrimitiveType($ftpPassive);
        $this->ftpPassive->setElementName('ftpPassive');
        return $this;
    }

    /**
     * 
     * @return boolean $ftpPassive
     */
    public function getFtpPassive()
    {
        return ($this->ftpPassive)
            ? $this->ftpPassive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setProtocol($protocol = null)
    {
        $this->protocol = ($protocol InstanceOf FileRepositoryProtocol)
             ? $protocol
             : new FileRepositoryProtocol($protocol);
        $this->protocol->setElementName('protocol');
        return $this;
    }

    /**
     * 
     * @return FileRepositoryProtocol $protocol
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
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port)
             ? $port
             : new Port($port);
        $this->port->setElementName('port');
        return $this;
    }

    /**
     * 
     * @return Port $port
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
    public function setFtpRemoteVerification($ftpRemoteVerification = null)
    {
        $this->ftpRemoteVerification = new PrimitiveType($ftpRemoteVerification);
        $this->ftpRemoteVerification->setElementName('ftpRemoteVerification');
        return $this;
    }

    /**
     * 
     * @return boolean $ftpRemoteVerification
     */
    public function getFtpRemoteVerification()
    {
        return ($this->ftpRemoteVerification)
            ? $this->ftpRemoteVerification->getElementValue()
            : null;
    }
}
