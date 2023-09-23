<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get user input from the form
    $text = $_POST['text'];
    $sortOrder = $_POST['sort_order'];
    $displayLimit = $_POST['display_limit'];

    // Tokenize the input text into words
    $words = str_word_count($text, 1);

    // Remove common stop words from the list of words (you can define your list)
    $stopWords = ["the", "and", "in"]; // Define your stop words
    $words = array_diff($words, $stopWords);

    // Calculate word frequencies
    $wordFrequencies = array_count_values($words);

    // Sort the word frequencies based on user's choice
    if ($sortOrder === 'ascending') {
        asort($wordFrequencies);
    } else {
        arsort($wordFrequencies);
    }

    // Display the top N words
    $topWords = array_slice($wordFrequencies, 0, $displayLimit, true);

    // Display the results
    echo "<h2>Word Frequencies:</h2>";
    foreach ($topWords as $word => $frequency) {
        echo "$word: $frequency<br>";
    }
}
?>
