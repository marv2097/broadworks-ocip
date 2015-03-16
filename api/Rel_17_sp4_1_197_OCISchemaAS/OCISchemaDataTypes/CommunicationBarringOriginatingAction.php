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
 * Possible originating actions for Communication Barring.
 */
class CommunicationBarringOriginatingAction extends SimpleType
{
    public $elementName = "CommunicationBarringOriginatingAction";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Allow',
            'Allow Timed',
            'Block',
            'Authorization Code',
            'Authorization Code Timed',
            'Treatment',
            'Transfer'
        ]));
    }
}
