<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSMDIGetACLListRequest. The table columns are:
 *         "Net Address" and "Description".
 */
class SystemSMDIGetACLListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIGetACLListResponse';
    protected $aclTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSMDIGetACLListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAclTable(TableType $aclTable = null)
    {
        $this->aclTable = $aclTable;
        $this->aclTable->setElementName('aclTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAclTable()
    {
        return $this->aclTable;
    }
}
