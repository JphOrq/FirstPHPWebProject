<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX</title>
</head>

<body>
    <?php
    // An array containing names for suggestions
    $names = [
        "Anna",
        "Brittany",
        "Cinderella",
        "Diana",
        "Eva",
        "Fiona",
        "Gunda",
        "Hege",
        "Inga",
        "Johanna",
        "Kitty",
        "Linda",
        "Nina",
        "Ophelia",
        "Petunia",
        "Amanda",
        "Raquel",
        "Cindy",
        "Doris",
        "Eve",
        "Evita",
        "Sunniva",
        "Tove",
        "Unni",
        "Violet",
        "Liza",
        "Elizabeth",
        "Ellen",
        "Wenche",
        "Vicky"
    ];

    // Get the user input (query) and convert it to lowercase for case-insensitive matching
    $q = strtolower($_GET["q"]);

    // An array to store matching suggestions
    $suggestions = [];

    // Check if the query is not empty
    if (!empty($q)) {
        // Iterate through the names array
        foreach ($names as $name) {
            // Check if the query matches the beginning of the name (case-insensitive)
            if (stripos($name, $q) === 0) {
                // Add the matching name to the suggestions array
                $suggestions[] = $name;
            }
        }
    }

    // Output the suggestions or "No suggestion available" if none found
    echo empty($suggestions) ? "No suggestion available" : implode(", ", $suggestions);
    ?>
</body>

</html>