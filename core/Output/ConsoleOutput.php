<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Output;

/**
 * Class ConsoleOutput - Output type for the interactive console.
 *
 * @package Broadworks_OCIP\core\Output
 */
class ConsoleOutput implements OutputInterface
{

    public static function render($data = '')
    {
        echo $data;
    }
}