<?php

    //load and display XML file
    header ("content-type: Text/xml");
    echo file_get_contents("products.xml");

?>