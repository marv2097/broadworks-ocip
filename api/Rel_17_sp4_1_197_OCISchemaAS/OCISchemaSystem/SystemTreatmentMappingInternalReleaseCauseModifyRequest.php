<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TreatmentId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the fields for an Internal Release Cause mapping.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemTreatmentMappingInternalReleaseCauseModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemTreatmentMappingInternalReleaseCauseModifyRequest';
    protected $internalReleaseCause = null;
    protected $treatmentId          = null;

    public function __construct(
         $internalReleaseCause,
         $treatmentId = null
    ) {
        $this->setInternalReleaseCause($internalReleaseCause);
        $this->setTreatmentId($treatmentId);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setInternalReleaseCause($internalReleaseCause = null)
    {
        if (!$internalReleaseCause) return $this;
        $this->internalReleaseCause = ($internalReleaseCause InstanceOf InternalReleaseCause16)
             ? $internalReleaseCause
             : new InternalReleaseCause16($internalReleaseCause);
        $this->internalReleaseCause->setName('internalReleaseCause');
        return $this;
    }

    /**
     * 
     * @return InternalReleaseCause16 $internalReleaseCause
     */
    public function getInternalReleaseCause()
    {
        return $this->internalReleaseCause->getValue();
    }

    /**
     * 
     */
    public function setTreatmentId($treatmentId = null)
    {
        if (!$treatmentId) return $this;
        $this->treatmentId = ($treatmentId InstanceOf TreatmentId)
             ? $treatmentId
             : new TreatmentId($treatmentId);
        $this->treatmentId->setName('treatmentId');
        return $this;
    }

    /**
     * 
     * @return TreatmentId $treatmentId
     */
    public function getTreatmentId()
    {
        return $this->treatmentId->getValue();
    }
}
