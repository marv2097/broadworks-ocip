<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPServerCallCenterMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPConnectionPingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CCC2MaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\CAPMaxClientConnections;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify CAP system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemCAPParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                    = 'SystemCAPParametersModifyRequest';
    protected $serverPort                              = null;
    protected $maxClientConnections                    = null;
    protected $enableConnectionPing                    = null;
    protected $connectionPingIntervalMinutes           = null;
    protected $CCC2ServerPort                          = null;
    protected $CCC2MaxClientConnections                = null;
    protected $capServerCallCenterPort                 = null;
    protected $capServerCallCenterMaxClientConnections = null;

    public function __construct(
         $serverPort = null,
         $maxClientConnections = null,
         $enableConnectionPing = null,
         $connectionPingIntervalMinutes = null,
         $CCC2ServerPort = null,
         $CCC2MaxClientConnections = null,
         $capServerCallCenterPort = null,
         $capServerCallCenterMaxClientConnections = null
    ) {
        $this->setServerPort($serverPort);
        $this->setMaxClientConnections($maxClientConnections);
        $this->setEnableConnectionPing($enableConnectionPing);
        $this->setConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
        $this->setCCC2ServerPort($CCC2ServerPort);
        $this->setCCC2MaxClientConnections($CCC2MaxClientConnections);
        $this->setCapServerCallCenterPort($capServerCallCenterPort);
        $this->setCapServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections);
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
    public function setServerPort($serverPort = null)
    {
        if (!$serverPort) return $this;
        $this->serverPort = ($serverPort InstanceOf Port1025)
             ? $serverPort
             : new Port1025($serverPort);
        $this->serverPort->setName('serverPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $serverPort
     */
    public function getServerPort()
    {
        return $this->serverPort->getValue();
    }

    /**
     * 
     */
    public function setMaxClientConnections($maxClientConnections = null)
    {
        if (!$maxClientConnections) return $this;
        $this->maxClientConnections = ($maxClientConnections InstanceOf CAPMaxClientConnections)
             ? $maxClientConnections
             : new CAPMaxClientConnections($maxClientConnections);
        $this->maxClientConnections->setName('maxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CAPMaxClientConnections $maxClientConnections
     */
    public function getMaxClientConnections()
    {
        return $this->maxClientConnections->getValue();
    }

    /**
     * 
     */
    public function setEnableConnectionPing($enableConnectionPing = null)
    {
        if (!$enableConnectionPing) return $this;
        $this->enableConnectionPing = new PrimitiveType($enableConnectionPing);
        $this->enableConnectionPing->setName('enableConnectionPing');
        return $this;
    }

    /**
     * 
     * @return boolean $enableConnectionPing
     */
    public function getEnableConnectionPing()
    {
        return $this->enableConnectionPing->getValue();
    }

    /**
     * 
     */
    public function setConnectionPingIntervalMinutes($connectionPingIntervalMinutes = null)
    {
        if (!$connectionPingIntervalMinutes) return $this;
        $this->connectionPingIntervalMinutes = ($connectionPingIntervalMinutes InstanceOf CAPConnectionPingIntervalMinutes)
             ? $connectionPingIntervalMinutes
             : new CAPConnectionPingIntervalMinutes($connectionPingIntervalMinutes);
        $this->connectionPingIntervalMinutes->setName('connectionPingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return CAPConnectionPingIntervalMinutes $connectionPingIntervalMinutes
     */
    public function getConnectionPingIntervalMinutes()
    {
        return $this->connectionPingIntervalMinutes->getValue();
    }

    /**
     * 
     */
    public function setCCC2ServerPort($CCC2ServerPort = null)
    {
        if (!$CCC2ServerPort) return $this;
        $this->CCC2ServerPort = ($CCC2ServerPort InstanceOf Port1025)
             ? $CCC2ServerPort
             : new Port1025($CCC2ServerPort);
        $this->CCC2ServerPort->setName('CCC2ServerPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $CCC2ServerPort
     */
    public function getCCC2ServerPort()
    {
        return $this->CCC2ServerPort->getValue();
    }

    /**
     * 
     */
    public function setCCC2MaxClientConnections($CCC2MaxClientConnections = null)
    {
        if (!$CCC2MaxClientConnections) return $this;
        $this->CCC2MaxClientConnections = ($CCC2MaxClientConnections InstanceOf CCC2MaxClientConnections)
             ? $CCC2MaxClientConnections
             : new CCC2MaxClientConnections($CCC2MaxClientConnections);
        $this->CCC2MaxClientConnections->setName('CCC2MaxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CCC2MaxClientConnections $CCC2MaxClientConnections
     */
    public function getCCC2MaxClientConnections()
    {
        return $this->CCC2MaxClientConnections->getValue();
    }

    /**
     * 
     */
    public function setCapServerCallCenterPort($capServerCallCenterPort = null)
    {
        if (!$capServerCallCenterPort) return $this;
        $this->capServerCallCenterPort = ($capServerCallCenterPort InstanceOf Port1025)
             ? $capServerCallCenterPort
             : new Port1025($capServerCallCenterPort);
        $this->capServerCallCenterPort->setName('capServerCallCenterPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $capServerCallCenterPort
     */
    public function getCapServerCallCenterPort()
    {
        return $this->capServerCallCenterPort->getValue();
    }

    /**
     * 
     */
    public function setCapServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections = null)
    {
        if (!$capServerCallCenterMaxClientConnections) return $this;
        $this->capServerCallCenterMaxClientConnections = ($capServerCallCenterMaxClientConnections InstanceOf CAPServerCallCenterMaxClientConnections)
             ? $capServerCallCenterMaxClientConnections
             : new CAPServerCallCenterMaxClientConnections($capServerCallCenterMaxClientConnections);
        $this->capServerCallCenterMaxClientConnections->setName('capServerCallCenterMaxClientConnections');
        return $this;
    }

    /**
     * 
     * @return CAPServerCallCenterMaxClientConnections $capServerCallCenterMaxClientConnections
     */
    public function getCapServerCallCenterMaxClientConnections()
    {
        return $this->capServerCallCenterMaxClientConnections->getValue();
    }
}
