<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\AccessDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Access Device Monitor system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceMonitorParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'SystemAccessDeviceMonitorParametersModifyRequest';
    protected $pollingIntervalMinutes = null;

    public function __construct(
         $pollingIntervalMinutes = null
    ) {
        $this->setPollingIntervalMinutes($pollingIntervalMinutes);
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
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        if (!$pollingIntervalMinutes) return $this;
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf AccessDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new AccessDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
        $this->pollingIntervalMinutes->setName('pollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMonitorPollingIntervalMinutes $pollingIntervalMinutes
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes->getValue();
    }
}
