<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Subscriber type
 */
class EnhancedCallLogsSubscriberType extends SimpleType
{
    public $elementName = "EnhancedCallLogsSubscriberType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Auto Attendant',
            'BroadWorks Anywhere Portal',
            'Call Center',
            'Hunt Group',
            'Route Point',
            'User'
        ]));
    }
}
