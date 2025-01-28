<?php
    $db = new SQLite3('database.db'); // Open or create the database

    // Create a table
    $db->exec('CREATE TABLE IF NOT EXISTS superheroes (id INTEGER PRIMARY KEY, name TEXT, powers TEXT)');

    // Insert data
    $db->exec("INSERT INTO superheroes (name, powers) VALUES ('Superman', 'Super strength')");

    // Fetch all data into an array
    $results = [];
    $result = $db->query('SELECT * FROM superheroes');
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $results[] = $row; // Store each row in the $results array
    }

    // Now loop through the $results array to display the data
    foreach ($results as $row) {
        echo $row['name'] . ' - ' . $row['powers'] . "<br>";
    }

    // Close the connection
    $db->close();
?>