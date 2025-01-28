<?php
// Path to your SQLite database file
$dbFile = 'coderdojo.db';

try {
    // Create a new PDO connection to the SQLite database
    $pdo = new PDO('sqlite:' . $dbFile);
    
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to create the superhero table
    $sql = "CREATE TABLE IF NOT EXISTS superhero (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                name VARCHAR(255) NOT NULL,
                powers VARCHAR(255) NOT NULL
            )";

    // Execute the query to create the table
    $pdo->exec($sql);

    echo "The database 'coderdojo' contains table: 'superhero'";
} catch (PDOException $e) {
    // Catch any errors and display the message
    echo "Error: " . $e->getMessage();
}
?>