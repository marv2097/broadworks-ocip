<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\Holiday;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the SystemHolidayScheduleGetRequest.
 *         The response contains the system holiday schedule information.
 */
class SystemHolidayScheduleGetResponse extends ComplexType implements ComplexInterface
{
    public    $name      = 'SystemHolidayScheduleGetResponse';
    protected $holiday01 = null;
    protected $holiday02 = null;
    protected $holiday03 = null;
    protected $holiday04 = null;
    protected $holiday05 = null;
    protected $holiday06 = null;
    protected $holiday07 = null;
    protected $holiday08 = null;
    protected $holiday09 = null;
    protected $holiday10 = null;
    protected $holiday11 = null;
    protected $holiday12 = null;
    protected $holiday13 = null;
    protected $holiday14 = null;
    protected $holiday15 = null;
    protected $holiday16 = null;
    protected $holiday17 = null;
    protected $holiday18 = null;
    protected $holiday19 = null;
    protected $holiday20 = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemHolidayScheduleGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHoliday01(Holiday $holiday01 = null)
    {
        if (!$holiday01) return $this;
        $this->holiday01 = $holiday01;
        $this->holiday01->setName('holiday01');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday01
     */
    public function getHoliday01()
    {
        return $this->holiday01;
    }

    /**
     * 
     */
    public function setHoliday02(Holiday $holiday02 = null)
    {
        if (!$holiday02) return $this;
        $this->holiday02 = $holiday02;
        $this->holiday02->setName('holiday02');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday02
     */
    public function getHoliday02()
    {
        return $this->holiday02;
    }

    /**
     * 
     */
    public function setHoliday03(Holiday $holiday03 = null)
    {
        if (!$holiday03) return $this;
        $this->holiday03 = $holiday03;
        $this->holiday03->setName('holiday03');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday03
     */
    public function getHoliday03()
    {
        return $this->holiday03;
    }

    /**
     * 
     */
    public function setHoliday04(Holiday $holiday04 = null)
    {
        if (!$holiday04) return $this;
        $this->holiday04 = $holiday04;
        $this->holiday04->setName('holiday04');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday04
     */
    public function getHoliday04()
    {
        return $this->holiday04;
    }

    /**
     * 
     */
    public function setHoliday05(Holiday $holiday05 = null)
    {
        if (!$holiday05) return $this;
        $this->holiday05 = $holiday05;
        $this->holiday05->setName('holiday05');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday05
     */
    public function getHoliday05()
    {
        return $this->holiday05;
    }

    /**
     * 
     */
    public function setHoliday06(Holiday $holiday06 = null)
    {
        if (!$holiday06) return $this;
        $this->holiday06 = $holiday06;
        $this->holiday06->setName('holiday06');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday06
     */
    public function getHoliday06()
    {
        return $this->holiday06;
    }

    /**
     * 
     */
    public function setHoliday07(Holiday $holiday07 = null)
    {
        if (!$holiday07) return $this;
        $this->holiday07 = $holiday07;
        $this->holiday07->setName('holiday07');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday07
     */
    public function getHoliday07()
    {
        return $this->holiday07;
    }

    /**
     * 
     */
    public function setHoliday08(Holiday $holiday08 = null)
    {
        if (!$holiday08) return $this;
        $this->holiday08 = $holiday08;
        $this->holiday08->setName('holiday08');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday08
     */
    public function getHoliday08()
    {
        return $this->holiday08;
    }

    /**
     * 
     */
    public function setHoliday09(Holiday $holiday09 = null)
    {
        if (!$holiday09) return $this;
        $this->holiday09 = $holiday09;
        $this->holiday09->setName('holiday09');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday09
     */
    public function getHoliday09()
    {
        return $this->holiday09;
    }

    /**
     * 
     */
    public function setHoliday10(Holiday $holiday10 = null)
    {
        if (!$holiday10) return $this;
        $this->holiday10 = $holiday10;
        $this->holiday10->setName('holiday10');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday10
     */
    public function getHoliday10()
    {
        return $this->holiday10;
    }

    /**
     * 
     */
    public function setHoliday11(Holiday $holiday11 = null)
    {
        if (!$holiday11) return $this;
        $this->holiday11 = $holiday11;
        $this->holiday11->setName('holiday11');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday11
     */
    public function getHoliday11()
    {
        return $this->holiday11;
    }

    /**
     * 
     */
    public function setHoliday12(Holiday $holiday12 = null)
    {
        if (!$holiday12) return $this;
        $this->holiday12 = $holiday12;
        $this->holiday12->setName('holiday12');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday12
     */
    public function getHoliday12()
    {
        return $this->holiday12;
    }

    /**
     * 
     */
    public function setHoliday13(Holiday $holiday13 = null)
    {
        if (!$holiday13) return $this;
        $this->holiday13 = $holiday13;
        $this->holiday13->setName('holiday13');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday13
     */
    public function getHoliday13()
    {
        return $this->holiday13;
    }

    /**
     * 
     */
    public function setHoliday14(Holiday $holiday14 = null)
    {
        if (!$holiday14) return $this;
        $this->holiday14 = $holiday14;
        $this->holiday14->setName('holiday14');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday14
     */
    public function getHoliday14()
    {
        return $this->holiday14;
    }

    /**
     * 
     */
    public function setHoliday15(Holiday $holiday15 = null)
    {
        if (!$holiday15) return $this;
        $this->holiday15 = $holiday15;
        $this->holiday15->setName('holiday15');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday15
     */
    public function getHoliday15()
    {
        return $this->holiday15;
    }

    /**
     * 
     */
    public function setHoliday16(Holiday $holiday16 = null)
    {
        if (!$holiday16) return $this;
        $this->holiday16 = $holiday16;
        $this->holiday16->setName('holiday16');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday16
     */
    public function getHoliday16()
    {
        return $this->holiday16;
    }

    /**
     * 
     */
    public function setHoliday17(Holiday $holiday17 = null)
    {
        if (!$holiday17) return $this;
        $this->holiday17 = $holiday17;
        $this->holiday17->setName('holiday17');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday17
     */
    public function getHoliday17()
    {
        return $this->holiday17;
    }

    /**
     * 
     */
    public function setHoliday18(Holiday $holiday18 = null)
    {
        if (!$holiday18) return $this;
        $this->holiday18 = $holiday18;
        $this->holiday18->setName('holiday18');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday18
     */
    public function getHoliday18()
    {
        return $this->holiday18;
    }

    /**
     * 
     */
    public function setHoliday19(Holiday $holiday19 = null)
    {
        if (!$holiday19) return $this;
        $this->holiday19 = $holiday19;
        $this->holiday19->setName('holiday19');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday19
     */
    public function getHoliday19()
    {
        return $this->holiday19;
    }

    /**
     * 
     */
    public function setHoliday20(Holiday $holiday20 = null)
    {
        if (!$holiday20) return $this;
        $this->holiday20 = $holiday20;
        $this->holiday20->setName('holiday20');
        return $this;
    }

    /**
     * 
     * @return Holiday $holiday20
     */
    public function getHoliday20()
    {
        return $this->holiday20;
    }
}
