<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemBroadWorksMobilityDnGetListRequest.
 */
class SystemBroadWorksMobilityGetIMRNListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $imrnNumber=null
    ) {
        $this->imrnNumber = new DN($imrnNumber);
        $this->args       = func_get_args();
    }

    public function setImrnNumber($imrnNumber)
    {
        $imrnNumber and $this->imrnNumber = new DN($imrnNumber);
    }

    public function getImrnNumber()
    {
        return (!$this->imrnNumber) ?: $this->imrnNumber->value();
    }
}