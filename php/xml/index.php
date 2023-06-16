<?php

require __DIR__ . '/../XMLRemote.php';

$remote = new XMLRemote();

$response =
    $remote->setUrl('http://ftp.geoinfo.msl.mt.gov/Documents/Metadata/GIS_Inventory/35524afc-669b-4614-9f44-43506ae21a1d.xml')
    ->generateResponse()
    ->getJson();

?>
<pre>
    <?php
    echo $response;
    ?>
</pre>