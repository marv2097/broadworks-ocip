<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Trunk group details (order and weight) for each trunk group
 */
class GroupEnterpriseTrunkPriorityWeightedTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $name       = 'GroupEnterpriseTrunkPriorityWeightedTrunkGroup';
    protected $trunkGroup = null;
    protected $priority   = null;
    protected $weight     = null;

    public function __construct(
         $trunkGroup,
         $priority,
         $weight
    ) {
        $this->setTrunkGroup($trunkGroup);
        $this->setPriority($priority);
        $this->setWeight($weight);
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
    public function setTrunkGroup($trunkGroup = null)
    {
        if (!$trunkGroup) return $this;
        $this->trunkGroup = new SimpleContent($trunkGroup);
        $this->trunkGroup->setName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroup
     */
    public function getTrunkGroup()
    {
        return $this->trunkGroup->getValue();
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        if (!$priority) return $this;
        $this->priority = new SimpleContent($priority);
        $this->priority->setName('priority');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $priority
     */
    public function getPriority()
    {
        return $this->priority->getValue();
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        if (!$weight) return $this;
        $this->weight = new SimpleContent($weight);
        $this->weight->setName('weight');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $weight
     */
    public function getWeight()
    {
        return $this->weight->getValue();
    }
}
