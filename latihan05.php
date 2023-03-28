<?php
    //model 1
    //age = array("peter"=>"35","ben"=>"37","joe"=>"43");

    $age["ADIT"] = "19";
    $age["BAGUS"] = "16";
    $age["PRAYU"] = "50";
    $age["MELLI"] = "36";
    $age["ERVINA"] = "45";

    header("contenk-type: application/json");
    echo json_encode($age);
