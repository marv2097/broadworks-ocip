<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceIntelligentNetworkServiceControl; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Pre-answer action timeout seconds.
 */
class IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds extends SimpleType
{
    public $elementName = "IntelligentNetworkServiceControlPreAnswerActionTimeoutSeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("6"));
        $this->addRestriction(new MaxInclusive("36"));
    }
}
