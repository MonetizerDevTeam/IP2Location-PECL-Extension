<?php
        /*Test DB access using cache mathod*/ 
        ip2location_open('IP-COUNTRY-SAMPLE.BIN');
        ip2location_open_mem(IP2LOCATION_CACHE_MEMORY);
        echo ip2location_get_country_short("25.5.10.2");
        echo "\n";
        echo ip2location_get_country_long("25.5.10.2");
        echo "\n";
        echo ip2location_get_region("25.5.10.2");
        echo "\n";
        echo ip2location_get_city("25.5.10.2");
        echo "\n";
        echo ip2location_get_isp("25.5.10.2");
        echo "\n";
        echo ip2location_get_latitude("25.5.10.2");
        echo "\n";
        echo ip2location_get_longitude("25.5.10.2");
        echo "\n";
        echo ip2location_get_domain("25.5.10.2");
        echo "\n";
        echo ip2location_get_zipcode("25.5.10.2");
        echo "\n";
        echo ip2location_get_timezone("25.5.10.2");
        echo "\n";
        echo ip2location_get_netspeed("25.5.10.2");
        echo "\n";
        echo ip2location_get_iddcode("25.5.10.2");
        echo "\n";
        echo ip2location_get_areacode("25.5.10.2");
        echo "\n";
        echo ip2location_get_weatherstationcode("25.5.10.2");
        echo "\n";
        echo ip2location_get_weatherstationname("25.5.10.2");
        echo "\n";
        echo ip2location_get_mcc("25.5.10.2");
        echo "\n";
        echo ip2location_get_mnc("25.5.10.2");
        echo "\n";
        echo ip2location_get_mobilebrand("25.5.10.2");
        echo "\n";
        echo ip2location_get_elevation("25.5.10.2");
        echo "\n";
        echo ip2location_get_usagetype("25.5.10.2");
        echo "\n";

        /* Additional Tests for ipfrom / ipto fields */
        $success = true;
        $data = ip2location_get_all("25.5.10.2");
        if (isset($data['ipfrom'])) {
            echo "ipfrom: ";
            echo $data['ipfrom'];
            echo "\n";
        } else {
            echo "ipfrom not present in data" . PHP_EOL;
            $success = false;
        }

        if (isset($data['ipto'])) {
            echo "ipto: ";
            echo $data['ipto'];
            echo "\n";
        } else {
            echo "ipto not present in data" . PHP_EOL;
            $success = false;
        }

        echo ip2location_close();

        if (success)
            exit(0);
        else
            exit(1);