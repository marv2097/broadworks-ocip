<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaAlternateTrunkIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request the list of users that are available to be added to an enterprise trunk.  This list contains users in the group that are trunk users and not already assigned to an enterprise trunk.
 *         It is possible to search by various criteria to restrict the number of rows returned.
 *         Multiple search criteria are logically ANDed together.
 *         The response is either a GroupEnterpriseTrunkGetAvailableUserListResponse or an ErrorResponse.
 */
class GroupEnterpriseTrunkGetAvailableUserListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                         = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetAvailableUserListResponse';
    public    $name = 'GroupEnterpriseTrunkGetAvailableUserListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $responseSizeLimit;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaUserId;
    protected $searchCriteriaAlternateTrunkIdentity;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $responseSizeLimit = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaUserFirstName = null,
         $searchCriteriaDn = null,
         $searchCriteriaUserId = null,
         $searchCriteriaAlternateTrunkIdentity = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaAlternateTrunkIdentity($searchCriteriaAlternateTrunkIdentity);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetAvailableUserListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
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
    public function setSearchCriteriaUserId(SearchCriteriaUserId $searchCriteriaUserId = null)
    {
        $this->searchCriteriaUserId = ($searchCriteriaUserId InstanceOf SearchCriteriaUserId)
             ? $searchCriteriaUserId
             : new SearchCriteriaUserId($searchCriteriaUserId);
        $this->searchCriteriaUserId->setName('searchCriteriaUserId');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaUserId $searchCriteriaUserId
     */
    public function getSearchCriteriaUserId()
    {
        return $this->searchCriteriaUserId;
    }

    /**
     * 
     */
    public function setSearchCriteriaAlternateTrunkIdentity(SearchCriteriaAlternateTrunkIdentity $searchCriteriaAlternateTrunkIdentity = null)
    {
        $this->searchCriteriaAlternateTrunkIdentity = ($searchCriteriaAlternateTrunkIdentity InstanceOf SearchCriteriaAlternateTrunkIdentity)
             ? $searchCriteriaAlternateTrunkIdentity
             : new SearchCriteriaAlternateTrunkIdentity($searchCriteriaAlternateTrunkIdentity);
        $this->searchCriteriaAlternateTrunkIdentity->setName('searchCriteriaAlternateTrunkIdentity');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaAlternateTrunkIdentity $searchCriteriaAlternateTrunkIdentity
     */
    public function getSearchCriteriaAlternateTrunkIdentity()
    {
        return $this->searchCriteriaAlternateTrunkIdentity;
    }
}
