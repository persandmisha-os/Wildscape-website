<?php
$file = 'reviews.json';

// Get form data
$user = trim($_POST['user']);
$comment = trim($_POST['comment']);
$rating = intval($_POST['rating']);

// Validate
if (!$user || !$comment || $rating < 1) {
  exit("❌ Invalid input");
}

// Load existing reviews
$data = json_decode(file_get_contents($file), true);

// Create new review
$newReview = [
  "user" => htmlspecialchars($user),
  "comment" => htmlspecialchars($comment),
  "rating" => $rating,
  "visible" => true
];

// Add new review to the array
$data['reviews'][] = $newReview;

// Save JSON file back
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "✅ Review submitted successfully!";
?>
