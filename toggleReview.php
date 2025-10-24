<?php
$id = $_GET['id'];
$visible = filter_var($_GET['visible'], FILTER_VALIDATE_BOOLEAN);

$file = 'reviews.json';
$data = json_decode(file_get_contents($file), true);

// Update visibility
if (isset($data['reviews'][$id])) {
  $data['reviews'][$id]['visible'] = $visible;
  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
  echo $visible ? "✅ Review made visible!" : "🚫 Review hidden!";
} else {
  echo "❌ Review not found!";
}
?>
