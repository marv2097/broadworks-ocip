<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder\Restrictions;


/**
 * Class MaxInclusive - Specifies the upper bounds for numeric values (the value must be less than or equal to this value).
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
class MaxInclusive extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        $valid = ((int)$input <= (int)$this->value);
        ($valid)
            ? $this->detail("Valid: Int $input is valid, max is {$this->value}")
            : $this->detail("Failed: Int $input is invalid, max is {$this->value}");
        return $valid;
    }
}