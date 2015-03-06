<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Access Device Monitor system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceMonitorParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $pollingIntervalMinutes=null
    ) {
        $this->pollingIntervalMinutes = $pollingIntervalMinutes;
        $this->args                   = func_get_args();
    }

    public function setPollingIntervalMinutes($pollingIntervalMinutes)
    {
        $pollingIntervalMinutes and $this->pollingIntervalMinutes = new AccessDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
    }

    public function getPollingIntervalMinutes()
    {
        return (!$this->pollingIntervalMinutes) ?: $this->pollingIntervalMinutes->value();
    }
}