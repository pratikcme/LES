<?php

require_once FCPATH . 'vendor/autoload.php';


use GeoIp2\Database\Reader;

function lookupGeoIP()
{
    // Use the MaxMind GeoIP2 library


    // This reader object should be reused across lookups as creation of it is
    // expensive.
    $reader = new Reader('/path/to/maxmind-database.mmdb');

    $record = $reader->city('128.101.101.101');
    $countryIsoCode = $record->country->isoCode;
    echo $countryIsoCode;
    exit;
    // Now you can do something with $countryIsoCode, e.g., display it in a view.
}
