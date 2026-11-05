<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurants | Craving Index</title>
    
</head>
<body>
    <header class="site-header">
        <div class="header-content">
            <a class="brand" href="../index.php">Craving Index</a>

            <nav class="site-nav" aria-label="Main navigation">
                <a href="../index.php">Home</a>
                <a href="index.php" aria-current="page">Restaurants</a>
                <span class="role-label">Administrator</span>
            </nav>
        </div>
    </header> -->
<?php
require_once '../includes/header.php';
require_once '../includes/nav.php';

?>

<main class="page-container">

        <div class="page-heading">
            <div>
                <h1>Manage Restaurants</h1>
                <p class="subtitle">
                    View restaurant profiles or add a new restaurant.
                </p>
            </div>

            <a class="button button-primary" href="add.php">
                + Add Restaurant
            </a>
        </div>

        <div class="table-container">
            <table>
                <caption class="table-caption">
                    Restaurant directory — fictional sample data
                </caption>
                <thead>
                    <tr>
                        <th scope="col">Restaurant name</th>
                        <th scope="col">Cuisine</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Canyon Kitchen</th>
                        <td>American</td>
                        <td><span class="status">Active</span></td>
                        <td>
                            <div class="actions">
                                <a
                                    class="button"
                                    href="view.php?id=1"
                                    aria-label="View Canyon Kitchen"
                                >View</a>

                                <a
                                    class="button"
                                    href="edit.php?id=1"
                                    aria-label="Edit Canyon Kitchen"
                                >Edit</a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p class="restaurant-count">1 restaurant</p>
<!-- 
        <footer class="site-footer">Craving Index</footer> -->
    </main>
<!-- </body>
</html> -->
<?php require_once '../includes/footer.php'; ?>