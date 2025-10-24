<?php
// Get form data
$user = $_POST['user'];
$comment = $_POST['comment'];
$rating = intval($_POST['rating']);

// Load existing reviews
$file = 'reviews.json';
$data = json_decode(file_get_contents($file), true);

// Create new review
$newReview = [
  "user" => $user,
  "comment" => $comment,
  "rating" => $rating,
  "visible" => true
];

// Add to array
$data["reviews"][] = $newReview;

// Save file
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo "✅ Review added successfully!";
?>
