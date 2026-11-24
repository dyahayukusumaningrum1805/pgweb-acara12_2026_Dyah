<?php
    header('Content-Type: application/json');
    $url = "http://localhost:8080/geoserver/pgweb/ows?service=WFS&version=1.0.0&request=GetFeature&typeName=pgweb:penduduk_sleman&outputFormat=application/json";
    echo file_get_contents($url);
?>