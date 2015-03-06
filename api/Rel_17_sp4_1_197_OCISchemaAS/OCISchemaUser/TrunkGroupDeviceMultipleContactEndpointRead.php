<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Trunk group device endpoint that can have multiple contacts.
 */
class TrunkGroupDeviceMultipleContactEndpointRead extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(    ) {
        $this->args= func_get_args();
    }
}