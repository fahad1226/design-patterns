<?php

namespace Factory\OperatingSystemFactory;


include_once './Android.php';
include_once './IOS.php';
include_once './Windows.php';

use Factory\Android\Android;
use Factory\IOS\IOS;
use Factory\Windows\Windows;

class OperatingSystemFactory
{

    public function getInstance($str)
    {
        if ($str === 'Open')
            return new Android();
        else if ($str === 'Closed')
            return new IOS();
        else
            return new Windows();
    }
}
