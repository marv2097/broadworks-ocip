<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDNSResolvedAddressSelectionPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingStatefulExpirationMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingMaxAddresses;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteTimerSeconds;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemRoutingGetRequest.
 */
class SystemRoutingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = 'SystemRoutingGetResponse';
    protected $isRouteRoundRobin                 = null;
    protected $routeTimerSeconds                 = null;
    protected $dnsResolvedAddressSelectionPolicy = null;
    protected $statefulExpirationMinutes         = null;
    protected $maxAddressesPerHostname           = null;
    protected $maxAddressesDuringSetup           = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemRoutingGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsRouteRoundRobin($isRouteRoundRobin = null)
    {
        if (!$isRouteRoundRobin) return $this;
        $this->isRouteRoundRobin = new PrimitiveType($isRouteRoundRobin);
        $this->isRouteRoundRobin->setName('isRouteRoundRobin');
        return $this;
    }

    /**
     * 
     * @return boolean $isRouteRoundRobin
     */
    public function getIsRouteRoundRobin()
    {
        return $this->isRouteRoundRobin->getValue();
    }

    /**
     * 
     */
    public function setRouteTimerSeconds($routeTimerSeconds = null)
    {
        if (!$routeTimerSeconds) return $this;
        $this->routeTimerSeconds = ($routeTimerSeconds InstanceOf RouteTimerSeconds)
             ? $routeTimerSeconds
             : new RouteTimerSeconds($routeTimerSeconds);
        $this->routeTimerSeconds->setName('routeTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return RouteTimerSeconds $routeTimerSeconds
     */
    public function getRouteTimerSeconds()
    {
        return $this->routeTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy = null)
    {
        if (!$dnsResolvedAddressSelectionPolicy) return $this;
        $this->dnsResolvedAddressSelectionPolicy = ($dnsResolvedAddressSelectionPolicy InstanceOf RoutingDNSResolvedAddressSelectionPolicy)
             ? $dnsResolvedAddressSelectionPolicy
             : new RoutingDNSResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy);
        $this->dnsResolvedAddressSelectionPolicy->setName('dnsResolvedAddressSelectionPolicy');
        return $this;
    }

    /**
     * 
     * @return RoutingDNSResolvedAddressSelectionPolicy $dnsResolvedAddressSelectionPolicy
     */
    public function getDnsResolvedAddressSelectionPolicy()
    {
        return $this->dnsResolvedAddressSelectionPolicy->getValue();
    }

    /**
     * 
     */
    public function setStatefulExpirationMinutes($statefulExpirationMinutes = null)
    {
        if (!$statefulExpirationMinutes) return $this;
        $this->statefulExpirationMinutes = ($statefulExpirationMinutes InstanceOf RoutingStatefulExpirationMinutes)
             ? $statefulExpirationMinutes
             : new RoutingStatefulExpirationMinutes($statefulExpirationMinutes);
        $this->statefulExpirationMinutes->setName('statefulExpirationMinutes');
        return $this;
    }

    /**
     * 
     * @return RoutingStatefulExpirationMinutes $statefulExpirationMinutes
     */
    public function getStatefulExpirationMinutes()
    {
        return $this->statefulExpirationMinutes->getValue();
    }

    /**
     * 
     */
    public function setMaxAddressesPerHostname($maxAddressesPerHostname = null)
    {
        if (!$maxAddressesPerHostname) return $this;
        $this->maxAddressesPerHostname = ($maxAddressesPerHostname InstanceOf RoutingMaxAddresses)
             ? $maxAddressesPerHostname
             : new RoutingMaxAddresses($maxAddressesPerHostname);
        $this->maxAddressesPerHostname->setName('maxAddressesPerHostname');
        return $this;
    }

    /**
     * 
     * @return RoutingMaxAddresses $maxAddressesPerHostname
     */
    public function getMaxAddressesPerHostname()
    {
        return $this->maxAddressesPerHostname->getValue();
    }

    /**
     * 
     */
    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup = null)
    {
        if (!$maxAddressesDuringSetup) return $this;
        $this->maxAddressesDuringSetup = ($maxAddressesDuringSetup InstanceOf RoutingMaxAddresses)
             ? $maxAddressesDuringSetup
             : new RoutingMaxAddresses($maxAddressesDuringSetup);
        $this->maxAddressesDuringSetup->setName('maxAddressesDuringSetup');
        return $this;
    }

    /**
     * 
     * @return RoutingMaxAddresses $maxAddressesDuringSetup
     */
    public function getMaxAddressesDuringSetup()
    {
        return $this->maxAddressesDuringSetup->getValue();
    }
}
