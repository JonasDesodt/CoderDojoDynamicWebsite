<?php
// Path to your SQLite database file
$dbFile = 'coderdojo.db';

try {
    // Create a new PDO connection to the SQLite database
    $pdo = new PDO('sqlite:' . $dbFile);
    
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL to insert data into the superhero table
    $sql = "INSERT INTO superhero (name, powers) VALUES 
            ('Superman', 'Super Strength'),
            ('Batman', 'Intelligence and Combat Skills'),
            ('Wonder Woman', 'Super Strength and Durability'),
            ('Flash', 'Super Speed'),
            ('Spider-Man', 'Wall Crawling and Spider Sense'),
            ('Iron Man', 'Powered Armor and Technology'),
            ('Hulk', 'Super Strength and Durability'),
            ('Thor', 'Godly Strength and Hammer Mjolnir')";

    // Execute the query to insert data
    $pdo->exec($sql);

    echo "Table 'superhero' seeded with data successfully!";
} catch (PDOException $e) {
    // Catch any errors and display the message
    echo "Error: " . $e->getMessage();
}
?>