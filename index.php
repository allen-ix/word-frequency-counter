<!DOCTYPE html>
<html>
<head>
    <title>Word Frequency Counter</title>
</head>
<body>
    <h1>Word Frequency Counter</h1>
    <form method="post" action="process.php">
        <label for="text">Paste your text here:</label><br>
        <textarea id="text" name="text" rows="10" cols="50"></textarea><br>
        
        <label for="sort_order">Sort order:</label>
        <select id="sort_order" name="sort_order">
            <option value="ascending">Ascending</option>
            <option value="descending">Descending</option>
        </select><br>
        
        <label for="display_limit">Number of words to display:</label>
        <input type="number" id="display_limit" name="display_limit" value="10" min="1"><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
