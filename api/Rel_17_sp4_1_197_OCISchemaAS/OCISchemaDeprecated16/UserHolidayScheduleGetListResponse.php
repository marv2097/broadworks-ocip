<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserHolidayScheduleGetListRequest.
 *         The response contains all the user's personal and user's group holiday schedule names.
 */
class UserHolidayScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $holidayScheduleTable
    ) {
        $this->holidayScheduleTable = $holidayScheduleTable;
        $this->args                 = func_get_args();
    }

    public function setHolidayScheduleTable($holidayScheduleTable)
    {
        $holidayScheduleTable and $this->holidayScheduleTable = new core:OCITable($holidayScheduleTable);
    }

    public function getHolidayScheduleTable()
    {
        return (!$this->holidayScheduleTable) ?: $this->holidayScheduleTable->value();
    }
}