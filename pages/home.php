<?php
    $title = "Home";

    $db = new SQLite3('../database.db'); // Open or create the database

    // Fetch all data into an array
    $results = [];
    $result = $db->query('SELECT * FROM superheroes');
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $superheroes[] = $row; // Store each row in the $results array
    }
?>

<?php require_once('../components/header.php') ?>

<main>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Powers</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($superheroes as $superhero): ?>
                <tr>
                    <td><?= $superhero['name'] ?></td>
                    <td><?= $superhero['powers'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>

<?php require_once('../components/footer.php') ?>