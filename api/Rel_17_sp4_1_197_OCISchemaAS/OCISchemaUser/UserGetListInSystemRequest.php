<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserNetworkClassOfService;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserInTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactServiceProvider;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaEmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaGroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of users in the system.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a UserGetListInSystemResponse or an ErrorResponse.
 */
class UserGetListInSystemRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInSystemResponse';
    public    $name = 'UserGetListInSystemRequest';
    protected $responseSizeLimit;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaEmailAddress;
    protected $searchCriteriaGroupId;
    protected $searchCriteriaExactServiceProvider;
    protected $searchCriteriaExactUserInTrunkGroup;
    protected $searchCriteriaExactUserNetworkClassOfService;

    public function __construct(
         $responseSizeLimit = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaUserFirstName = null,
         $searchCriteriaDn = null,
         $searchCriteriaEmailAddress = null,
         $searchCriteriaGroupId = null,
         $searchCriteriaExactServiceProvider = null,
         $searchCriteriaExactUserInTrunkGroup = null,
         $searchCriteriaExactUserNetworkClassOfService = null
    ) {
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->setSearchCriteriaGroupId($searchCriteriaGroupId);
        $this->setSearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
        $this->setSearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
        $this->setSearchCriteriaExactUserNetworkClassOfService($searchCriteriaExactUserNetworkClassOfService);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserGetListInSystemResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setResponseSizeLimit($responseSizeLimit = null)
    {
        $this->responseSizeLimit = ($responseSizeLimit InstanceOf ResponseSizeLimit)
             ? $responseSizeLimit
             : new ResponseSizeLimit($responseSizeLimit);
        $this->responseSizeLimit->setName('responseSizeLimit');
        return $this;
    }

    /**
     * 
     * @return ResponseSizeLimit $responseSizeLimit
     */
    public function getResponseSizeLimit()
    {
        return ($this->responseSizeLimit) ? $this->responseSizeLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserLastName(SearchCriteriaUserLastName $searchCriteriaUserLastName = null)
    {
        $this->searchCriteriaUserLastName = ($searchCriteriaUserLastName InstanceOf SearchCriteriaUserLastName)
             ? $searchCriteriaUserLastName
             : new SearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->searchCriteriaUserLastName->setName('searchCriteriaUserLastName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserLastName $searchCriteriaUserLastName
     */
    public function getSearchCriteriaUserLastName()
    {
        return $this->searchCriteriaUserLastName;
    }

    /**
     * 
     */
    public function setSearchCriteriaUserFirstName(SearchCriteriaUserFirstName $searchCriteriaUserFirstName = null)
    {
        $this->searchCriteriaUserFirstName = ($searchCriteriaUserFirstName InstanceOf SearchCriteriaUserFirstName)
             ? $searchCriteriaUserFirstName
             : new SearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->searchCriteriaUserFirstName->setName('searchCriteriaUserFirstName');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserFirstName $searchCriteriaUserFirstName
     */
    public function getSearchCriteriaUserFirstName()
    {
        return $this->searchCriteriaUserFirstName;
    }

    /**
     * 
     */
    public function setSearchCriteriaDn(SearchCriteriaDn $searchCriteriaDn = null)
    {
        $this->searchCriteriaDn = ($searchCriteriaDn InstanceOf SearchCriteriaDn)
             ? $searchCriteriaDn
             : new SearchCriteriaDn($searchCriteriaDn);
        $this->searchCriteriaDn->setName('searchCriteriaDn');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaDn $searchCriteriaDn
     */
    public function getSearchCriteriaDn()
    {
        return $this->searchCriteriaDn;
    }

    /**
     * 
     */
    public function setSearchCriteriaEmailAddress(SearchCriteriaEmailAddress $searchCriteriaEmailAddress = null)
    {
        $this->searchCriteriaEmailAddress = ($searchCriteriaEmailAddress InstanceOf SearchCriteriaEmailAddress)
             ? $searchCriteriaEmailAddress
             : new SearchCriteriaEmailAddress($searchCriteriaEmailAddress);
        $this->searchCriteriaEmailAddress->setName('searchCriteriaEmailAddress');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaEmailAddress $searchCriteriaEmailAddress
     */
    public function getSearchCriteriaEmailAddress()
    {
        return $this->searchCriteriaEmailAddress;
    }

    /**
     * 
     */
    public function setSearchCriteriaGroupId(SearchCriteriaGroupId $searchCriteriaGroupId = null)
    {
        $this->searchCriteriaGroupId = ($searchCriteriaGroupId InstanceOf SearchCriteriaGroupId)
             ? $searchCriteriaGroupId
             : new SearchCriteriaGroupId($searchCriteriaGroupId);
        $this->searchCriteriaGroupId->setName('searchCriteriaGroupId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaGroupId $searchCriteriaGroupId
     */
    public function getSearchCriteriaGroupId()
    {
        return $this->searchCriteriaGroupId;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactServiceProvider(SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider = null)
    {
        $this->searchCriteriaExactServiceProvider = ($searchCriteriaExactServiceProvider InstanceOf SearchCriteriaExactServiceProvider)
             ? $searchCriteriaExactServiceProvider
             : new SearchCriteriaExactServiceProvider($searchCriteriaExactServiceProvider);
        $this->searchCriteriaExactServiceProvider->setName('searchCriteriaExactServiceProvider');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactServiceProvider $searchCriteriaExactServiceProvider
     */
    public function getSearchCriteriaExactServiceProvider()
    {
        return $this->searchCriteriaExactServiceProvider;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserInTrunkGroup(SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup = null)
    {
        $this->searchCriteriaExactUserInTrunkGroup = ($searchCriteriaExactUserInTrunkGroup InstanceOf SearchCriteriaExactUserInTrunkGroup)
             ? $searchCriteriaExactUserInTrunkGroup
             : new SearchCriteriaExactUserInTrunkGroup($searchCriteriaExactUserInTrunkGroup);
        $this->searchCriteriaExactUserInTrunkGroup->setName('searchCriteriaExactUserInTrunkGroup');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserInTrunkGroup $searchCriteriaExactUserInTrunkGroup
     */
    public function getSearchCriteriaExactUserInTrunkGroup()
    {
        return $this->searchCriteriaExactUserInTrunkGroup;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserNetworkClassOfService(SearchCriteriaExactUserNetworkClassOfService $searchCriteriaExactUserNetworkClassOfService = null)
    {
        $this->searchCriteriaExactUserNetworkClassOfService = ($searchCriteriaExactUserNetworkClassOfService InstanceOf SearchCriteriaExactUserNetworkClassOfService)
             ? $searchCriteriaExactUserNetworkClassOfService
             : new SearchCriteriaExactUserNetworkClassOfService($searchCriteriaExactUserNetworkClassOfService);
        $this->searchCriteriaExactUserNetworkClassOfService->setName('searchCriteriaExactUserNetworkClassOfService');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserNetworkClassOfService $searchCriteriaExactUserNetworkClassOfService
     */
    public function getSearchCriteriaExactUserNetworkClassOfService()
    {
        return $this->searchCriteriaExactUserNetworkClassOfService;
    }
}
