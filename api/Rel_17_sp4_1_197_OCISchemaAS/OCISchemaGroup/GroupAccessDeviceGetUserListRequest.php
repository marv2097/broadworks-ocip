<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactEndpointType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortUserPart;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaLinePortDomain;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaExactUserType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserFirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserLastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\ResponseSizeLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria\SearchCriteriaDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests the configuration of a specified group access device.
 *         The response is either GroupAccessDeviceGetUserListResponse or ErrorResponse.
 */
class GroupAccessDeviceGetUserListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType                    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetUserListResponse';
    public    $name = 'GroupAccessDeviceGetUserListRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $deviceName;
    protected $responseSizeLimit;
    protected $searchCriteriaLinePortUserPart;
    protected $searchCriteriaLinePortDomain;
    protected $searchCriteriaUserLastName;
    protected $searchCriteriaUserFirstName;
    protected $searchCriteriaDn;
    protected $searchCriteriaUserId;
    protected $searchCriteriaExactEndpointType;
    protected $searchCriteriaExactUserType;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $deviceName = '',
         $responseSizeLimit = null,
         $searchCriteriaLinePortUserPart = null,
         $searchCriteriaLinePortDomain = null,
         $searchCriteriaUserLastName = null,
         $searchCriteriaUserFirstName = null,
         $searchCriteriaDn = null,
         $searchCriteriaUserId = null,
         $searchCriteriaExactEndpointType = null,
         $searchCriteriaExactUserType = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setDeviceName($deviceName);
        $this->setResponseSizeLimit($responseSizeLimit);
        $this->setSearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
        $this->setSearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
        $this->setSearchCriteriaUserLastName($searchCriteriaUserLastName);
        $this->setSearchCriteriaUserFirstName($searchCriteriaUserFirstName);
        $this->setSearchCriteriaDn($searchCriteriaDn);
        $this->setSearchCriteriaUserId($searchCriteriaUserId);
        $this->setSearchCriteriaExactEndpointType($searchCriteriaExactEndpointType);
        $this->setSearchCriteriaExactUserType($searchCriteriaExactUserType);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAccessDeviceGetUserListResponse $response
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
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName) ? $this->deviceName->getValue() : null;
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
    public function setSearchCriteriaLinePortUserPart(SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart = null)
    {
        $this->searchCriteriaLinePortUserPart = ($searchCriteriaLinePortUserPart InstanceOf SearchCriteriaLinePortUserPart)
             ? $searchCriteriaLinePortUserPart
             : new SearchCriteriaLinePortUserPart($searchCriteriaLinePortUserPart);
        $this->searchCriteriaLinePortUserPart->setName('searchCriteriaLinePortUserPart');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaLinePortUserPart $searchCriteriaLinePortUserPart
     */
    public function getSearchCriteriaLinePortUserPart()
    {
        return $this->searchCriteriaLinePortUserPart;
    }

    /**
     * 
     */
    public function setSearchCriteriaLinePortDomain(SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain = null)
    {
        $this->searchCriteriaLinePortDomain = ($searchCriteriaLinePortDomain InstanceOf SearchCriteriaLinePortDomain)
             ? $searchCriteriaLinePortDomain
             : new SearchCriteriaLinePortDomain($searchCriteriaLinePortDomain);
        $this->searchCriteriaLinePortDomain->setName('searchCriteriaLinePortDomain');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaLinePortDomain $searchCriteriaLinePortDomain
     */
    public function getSearchCriteriaLinePortDomain()
    {
        return $this->searchCriteriaLinePortDomain;
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
    public function setSearchCriteriaExactEndpointType(SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType = null)
    {
        $this->searchCriteriaExactEndpointType = ($searchCriteriaExactEndpointType InstanceOf SearchCriteriaExactEndpointType)
             ? $searchCriteriaExactEndpointType
             : new SearchCriteriaExactEndpointType($searchCriteriaExactEndpointType);
        $this->searchCriteriaExactEndpointType->setName('searchCriteriaExactEndpointType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactEndpointType $searchCriteriaExactEndpointType
     */
    public function getSearchCriteriaExactEndpointType()
    {
        return $this->searchCriteriaExactEndpointType;
    }

    /**
     * 
     */
    public function setSearchCriteriaExactUserType(SearchCriteriaExactUserType $searchCriteriaExactUserType = null)
    {
        $this->searchCriteriaExactUserType = ($searchCriteriaExactUserType InstanceOf SearchCriteriaExactUserType)
             ? $searchCriteriaExactUserType
             : new SearchCriteriaExactUserType($searchCriteriaExactUserType);
        $this->searchCriteriaExactUserType->setName('searchCriteriaExactUserType');
        return $this;
    }

    /**
     * 
     * @return SearchCriteriaExactUserType $searchCriteriaExactUserType
     */
    public function getSearchCriteriaExactUserType()
    {
        return $this->searchCriteriaExactUserType;
    }
}
