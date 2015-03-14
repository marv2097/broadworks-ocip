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
 * Class MinExclusive - Specifies the lower bounds for numeric values (the value must be greater than this value).
 *
 * @package Broadworks_OCIP\core\Builder\Restrictions
 */
class MinExclusive extends Restriction implements RestrictionInterface
{
    public function validate($input)
    {
        $valid = ((int)$input >= (int)$this->value);
        ($valid)
            ? $this->detail("Valid: Int $input is valid, min is {$this->value}")
            : $this->detail("Failed: Int $input is invalid, min is {$this->value}");
        return $valid;
    }
}