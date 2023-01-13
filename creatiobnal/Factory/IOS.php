<?php

namespace Factory\IOS;

include_once './OS.php';

use Factory\OS\OS;

class IOS implements OS
{
    public function spec()
    {
        print('I am the most secure operating system!');
    }
}
