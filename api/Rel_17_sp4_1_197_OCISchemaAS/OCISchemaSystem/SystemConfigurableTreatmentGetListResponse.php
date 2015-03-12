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
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 */
class SystemConfigurableTreatmentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'SystemConfigurableTreatmentGetListResponse';
    protected $treatmentTable = null;

    /**
     * @return SystemConfigurableTreatmentGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTreatmentTable(TableType $treatmentTable = null)
    {
        if (!$treatmentTable) return $this;
        $this->treatmentTable = $treatmentTable;
        $this->treatmentTable->setName('treatmentTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTreatmentTable()
    {
        return $this->treatmentTable;
    }
}
