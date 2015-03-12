<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Group Id" and "Can Delete"
 */
class ServiceProviderDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'ServiceProviderDnGetSummaryListResponse';
    protected $dnSummaryTable = null;

    /**
     * @return ServiceProviderDnGetSummaryListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDnSummaryTable(TableType $dnSummaryTable = null)
    {
        if (!$dnSummaryTable) return $this;
        $this->dnSummaryTable = $dnSummaryTable;
        $this->dnSummaryTable->setName('dnSummaryTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDnSummaryTable()
    {
        return $this->dnSummaryTable;
    }
}
