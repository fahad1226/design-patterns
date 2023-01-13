<?php

namespace Factory\Windows;

include_once './OS.php';

use Factory\OS\OS;

class Windows implements OS
{
    public function spec()
    {
        print('I am the most creepy operating system');
    }
}
