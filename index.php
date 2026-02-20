<?php 
include("index.html");
$query = htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8');
echo "You searched for: " . $query;
// Check if the 'query' parameter exists and is not empty
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);  // Sanitize the input
    echo "Du har søgt efter: " . $query;  // Display the search term
} else {
    echo "Indtast venligst et søgeord.";  // Message if no query parameter is provided
}
?>
<?php 
include("index.html");
$query = htmlspecialchars($_GET['query'], ENT_QUOTES, 'UTF-8');
echo "You searched for: " . $query;
// Check if the 'query' parameter exists and is not empty
if (isset($_GET['query']) && !empty($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);  // Sanitize the input
    echo "Du har søgt efter: " . $query;  // Display the search term
} else {
    echo "Indtast venligst et søgeord.";  // Message if no query parameter is provided
}
?>

