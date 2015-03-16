<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Choices for Connected Line Identification Privacy on Redirected Calls
 */
class ConnectedLineIdentificationPrivacyOnRedirectedCalls extends SimpleType
{
    public $elementName = "ConnectedLineIdentificationPrivacyOnRedirectedCalls";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'No Privacy',
            'Privacy For External Calls',
            'Privacy For All Calls'
        ]));
    }
}
