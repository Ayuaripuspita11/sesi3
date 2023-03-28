<?php
    $mhs = array(
        array("kade","2234547698","papua"),
        array("melli","33257684","nusa kambangan"),
        array("dinan","5376528756","aceh"),
        array("prayu","2254368767","kupang"),
        array("intan","2254368767","sumbawa"),
        array("ervina","2254368767","bugis"),
        array("ayu","2254368767","bali"),
        array("alpis","2254368767","jawe"),


    );
    header("contenk-type: application/json");
    echo json_encode($mhs);

