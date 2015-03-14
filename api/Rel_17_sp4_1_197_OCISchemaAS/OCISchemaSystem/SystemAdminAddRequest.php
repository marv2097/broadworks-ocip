<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemAdminType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FirstName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Language;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LastName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a system or provisioning administrator.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAdminAddRequest extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemAdminAddRequest';
    protected $userId    = null;
    protected $firstName = null;
    protected $lastName  = null;
    protected $password  = null;
    protected $language  = null;
    protected $adminType = null;
    protected $readOnly  = null;

    public function __construct(
         $userId,
         $firstName = null,
         $lastName = null,
         $password,
         $language = null,
         $adminType,
         $readOnly
    ) {
        $this->setUserId($userId);
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setPassword($password);
        $this->setLanguage($language);
        $this->setAdminType($adminType);
        $this->setReadOnly($readOnly);
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
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setFirstName($firstName = null)
    {
        if (!$firstName) return $this;
        $this->firstName = ($firstName InstanceOf FirstName)
             ? $firstName
             : new FirstName($firstName);
        $this->firstName->setName('firstName');
        return $this;
    }

    /**
     * 
     * @return FirstName $firstName
     */
    public function getFirstName()
    {
        return $this->firstName->getValue();
    }

    /**
     * 
     */
    public function setLastName($lastName = null)
    {
        if (!$lastName) return $this;
        $this->lastName = ($lastName InstanceOf LastName)
             ? $lastName
             : new LastName($lastName);
        $this->lastName->setName('lastName');
        return $this;
    }

    /**
     * 
     * @return LastName $lastName
     */
    public function getLastName()
    {
        return $this->lastName->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return Password $password
     */
    public function getPassword()
    {
        return $this->password->getValue();
    }

    /**
     * 
     */
    public function setLanguage($language = null)
    {
        if (!$language) return $this;
        $this->language = ($language InstanceOf Language)
             ? $language
             : new Language($language);
        $this->language->setName('language');
        return $this;
    }

    /**
     * 
     * @return Language $language
     */
    public function getLanguage()
    {
        return $this->language->getValue();
    }

    /**
     * 
     */
    public function setAdminType($adminType = null)
    {
        if (!$adminType) return $this;
        $this->adminType = ($adminType InstanceOf SystemAdminType)
             ? $adminType
             : new SystemAdminType($adminType);
        $this->adminType->setName('adminType');
        return $this;
    }

    /**
     * 
     * @return SystemAdminType $adminType
     */
    public function getAdminType()
    {
        return $this->adminType->getValue();
    }

    /**
     * 
     */
    public function setReadOnly($readOnly = null)
    {
        if (!$readOnly) return $this;
        $this->readOnly = new PrimitiveType($readOnly);
        $this->readOnly->setName('readOnly');
        return $this;
    }

    /**
     * 
     * @return boolean $readOnly
     */
    public function getReadOnly()
    {
        return $this->readOnly->getValue();
    }
}
