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
 * Protocols that an access device can use to fetch files from BroadWorks.
 */
class DeviceAccessProtocol16 extends SimpleType
{
    public $elementName = "DeviceAccessProtocol16";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Http',
            'Https',
            'FTP',
            'TFTP'
        ]));
    }
}
