<?php
// hook up a library
require 'CountryDetection.class.php';
// use static method and get country
echo CountryDetection::get();
// and it's this same as
echo CountryDetection::get('country');
// other nice stuff to detect
echo CountryDetection::get('currency');
