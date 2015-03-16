<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupDepartmentAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupDepartmentAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDepartmentAdminGetListResponse';
    protected $departmentAdminTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentAdminTable(TableType $departmentAdminTable = null)
    {
        $this->departmentAdminTable = $departmentAdminTable;
        $this->departmentAdminTable->setElementName('departmentAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDepartmentAdminTable()
    {
        return $this->departmentAdminTable;
    }
}
