<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Communication Barring User-Control lockout time in minutes.
 */
class CommunicationBarringUserControlLockoutMinutes extends SimpleType
{
    public $elementName = "CommunicationBarringUserControlLockoutMinutes";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("600"));
    }
}
