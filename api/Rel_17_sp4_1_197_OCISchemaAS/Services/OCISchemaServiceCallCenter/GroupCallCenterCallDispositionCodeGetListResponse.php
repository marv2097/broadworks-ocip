<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterCallDispositionCodeGetListRequest.
 *         Contains a table with column headings: "Is Active", "Code", "Description".
 */
class GroupCallCenterCallDispositionCodeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = 'GroupCallCenterCallDispositionCodeGetListResponse';
    protected $dispositionCodesTable = null;

    /**
     * @return GroupCallCenterCallDispositionCodeGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDispositionCodesTable(TableType $dispositionCodesTable = null)
    {
        if (!$dispositionCodesTable) return $this;
        $this->dispositionCodesTable = $dispositionCodesTable;
        $this->dispositionCodesTable->setName('dispositionCodesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDispositionCodesTable()
    {
        return $this->dispositionCodesTable;
    }
}
