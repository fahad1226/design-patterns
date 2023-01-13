<?php

// include_once './Android.php';
// include_once './IOS.php';
// include_once './Windows.php';


include_once './OperatingSystemFactory.php';

use Factory\Android\Android;
use Factory\IOS\IOS;
use Factory\OperatingSystemFactory\OperatingSystemFactory;
use Factory\OS\OS;
use Factory\Windows\Windows;


# usually, what we do is create object like this. So if we follow the FACTORY design patter, 
# instead of doing this way, we could make a Factory class and 
// $ios = new IOS();
// $ios->spec();

// $android = new Android();
// $android->spec();

// $windows = new Windows();
// $windows->spec();



$osFactory = new OperatingSystemFactory();

$object =  $osFactory->getInstance('Open');
$object->spec();
