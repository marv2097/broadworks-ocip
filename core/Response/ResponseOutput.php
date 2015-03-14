<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Response;

/**
 * Class ResponseOutput - Convenience class for selecting response output format.
 *
 * @package Broadworks_OCIP\core\Response
 */
abstract class ResponseOutput
{
    const STD = 0;
    const XML = 1;
    const JSON = 2;
    const SIMPLEXML = 3;
    const TABLE = 4;
    const PRETTY = 5;
}