<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkServerAlternateCallIndicator;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemExpensiveCallTypeGetListRequest.
 *         Replaced by: SystemExpensiveCallTypeGetListResponse16sp1
 */
class SystemExpensiveCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $alternateCallIndicator=null
    ) {
        $this->alternateCallIndicator = $alternateCallIndicator;
        $this->args                   = func_get_args();
    }

    public function setAlternateCallIndicator($alternateCallIndicator)
    {
        $alternateCallIndicator and $this->alternateCallIndicator = new NetworkServerAlternateCallIndicator($alternateCallIndicator);
    }

    public function getAlternateCallIndicator()
    {
        return (!$this->alternateCallIndicator) ?: $this->alternateCallIndicator->value();
    }
}