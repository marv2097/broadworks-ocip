<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseVoiceVPNGetListResponse.
 *         Returns a 4 column table with column headings:
 *           "Location Code", "Min Extension Length", "Max Extension Length", "Location Selection".
 */
class EnterpriseVoiceVPNGetPolicyListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNGetPolicyListResponse';
    protected $locationList;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNGetPolicyListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLocationList(TableType $locationList = null)
    {
        $this->locationList = $locationList;
        $this->locationList->setElementName('locationList');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getLocationList()
    {
        return ($this->locationList)
            ? $this->locationList->getElementValue()
            : null;
    }
}
