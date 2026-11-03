<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants | Craving Index</title>
</head>
<body>
    <header>
        <a href="../index.php">Craving Index</a>
    </header>

    <main>
        <h1>Manage Restaurants</h1>
        <p>View restaurant profiles or add a new restaurant.</p>

        <a href="add.php">Add Restaurant</a>

        <table>
            <caption>Restaurant directory — fictional sample data</caption>
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Cuisine</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Canyon Kitchen</td>
                    <td>American</td>
                    <td>Active</td>
                    <td>
                        <a href="view.php?id=1">View Canyon Kitchen</a>
                        <a href="edit.php?id=1">Edit Canyon Kitchen</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </main>
</body>
</html>