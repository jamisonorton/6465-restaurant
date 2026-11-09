<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="index.php?restaurant_id=<?= $rid ?>">&larr; Back to Menu</a>
    <div class="page-heading">
        <div>
            <h1>Signature Truffle Burger</h1>
            <p class="subtitle">Entrées · $18.50</p>
            <p>House-ground beef, truffle aioli, aged cheddar.</p>
        </div><a class="button button-primary" href="edit.php?id=1&restaurant_id=<?= $rid ?>">Edit Item</a>
    </div>
    <hr class="section-divider">
    <div class="page-heading">
        <div>
            <h2>Guest Reviews</h2>
            <p class="subtitle">Average 4.5 / 5 · 2 reviews</p>
        </div><a class="button" href="review-add.php?item_id=1&restaurant_id=<?= $rid ?>">+ Add Review</a>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Rating</th>
                    <th>Review</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>5 / 5</td>
                    <td>Rich and perfectly cooked.</td>
                    <td>
                        <div class="actions"><a class="button"
                                href="review-edit.php?id=1&restaurant_id=<?= $rid ?>">Edit</a><a class="button"
                                href="review-delete.php?id=1&restaurant_id=<?= $rid ?>">Delete</a></div>
                    </td>
                </tr>
                <tr>
                    <td>4 / 5</td>
                    <td>Great burger, a little salty.</td>
                    <td>
                        <div class="actions"><a class="button"
                                href="review-edit.php?id=2&restaurant_id=<?= $rid ?>">Edit</a><a class="button"
                                href="review-delete.php?id=2&restaurant_id=<?= $rid ?>">Delete</a></div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</main><?php require_once '../includes/footer.php'; ?>