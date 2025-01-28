<?php
    $title = "Super heroes";

    $dbFile = '../coderdojo.db';

    try {
        $pdo = new PDO('sqlite:' . $dbFile);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM superhero";
        $stmt = $pdo->query($sql);
        $superheroes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="styles/site.css" type="text/css">    
</head>
<body>
    <h1><?= $title ?></h1>

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

    <script src="scripts/site.js" type="text/javascript"></script>
</body>
</html>