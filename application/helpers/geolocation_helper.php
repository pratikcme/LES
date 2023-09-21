<?php

require_once FCPATH . 'vendor/autoload.php';


use GeoIp2\Database\Reader;

function getPhoneCode()
{
    // Use the MaxMind GeoIP2 library

    $ipAddress = $_SERVER['REMOTE_ADDR'];
    // This reader object should be reused across lookups as creation of it is
    // expensive.
    $reader = new Reader(APPPATH . 'config/maxmind-database.mmdb');

    $record = $reader->country($ipAddress);


    $country_phonecode = "";
    foreach (getCountryPhoneCode() as $key => $value) {
        if ($key == $record->country->isoCode) {
            $country_phonecode = '+' . $value;
        }
    }
    return $country_phonecode;
    // Now you can do something with $countryIsoCode, e.g., display it in a view.
}
