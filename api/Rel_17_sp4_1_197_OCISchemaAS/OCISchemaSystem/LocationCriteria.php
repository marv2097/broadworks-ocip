<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Identifies the location zone criteria to be matched.
 */
class LocationCriteria extends SimpleType
{
    public $elementName = "LocationCriteria";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'In Office Zone',
            'In Primary Zone',
            'In Office Zone, Outside of Primary Zone',
            'Outside of Office Zone',
            'Disregard Zones'
        ]));
    }
}
