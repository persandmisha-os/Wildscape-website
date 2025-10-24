<?php
// Load existing XML
$xml = simplexml_load_file("products.xml");

// Add a new product
$new = $xml->addChild("product");
$new->addAttribute("id", "4");
$new->addChild("name", "Watermelon Cooler");
$new->addChild("price", "180");

// Save it back
$xml->asXML("products.xml");

echo "New product added!";
?>
