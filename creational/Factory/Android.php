<?php

namespace Factory\Android;

include_once './OS.php';

use Factory\OS\OS;

class Android implements OS
{
    public function spec()
    {
        print('I am the most popular operating system!');
    }
}
