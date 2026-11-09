<?php
require_once '../includes/header.php';
require_once '../includes/nav.php';
$restaurantId = (int) ($_GET['restaurant_id'] ?? 1);
$restaurant = $restaurantId === 5 ? 'Juniper & Stone' : 'Canyon Kitchen';
$items = [
    ['id' => 1, 'name' => 'Signature Truffle Burger', 'category' => 'Entrées', 'price' => 18.50, 'description' => 'House-ground beef, truffle aioli, aged cheddar.', 'reviews' => [['text' => 'Rich and perfectly cooked.', 'rating' => 5], ['text' => 'Great burger, a little salty.', 'rating' => 4]]],
    ['id' => 2, 'name' => 'Roasted Tomato Soup', 'category' => 'Starters', 'price' => 9.00, 'description' => 'Slow-roasted tomatoes with basil cream.', 'reviews' => [['text' => 'Comforting and flavorful.', 'rating' => 5], ['text' => 'A bit too creamy for me.', 'rating' => 3]]],
    ['id' => 3, 'name' => 'Crispy Brussels Sprouts', 'category' => 'Sides', 'price' => 8.50, 'description' => 'Crispy sprouts, lemon, parmesan.', 'reviews' => [['text' => 'Loved the crispy texture.', 'rating' => 4]]],
];
$ratings = array_merge(...array_column($items, 'reviews'));
$average = array_sum(array_column($ratings, 'rating')) / count($ratings);
?>
<main class="page-container">
    <div class="page-heading">
        <div>
            <h1><?= htmlspecialchars($restaurant) ?> Menu</h1>
            <p class="subtitle">Manage dishes and read guest feedback.</p>
        </div><a class="button button-primary" href="add.php?restaurant_id=<?= $restaurantId ?>">+ Add Menu Item</a>
    </div>
    <section class="details-grid">
        <div>
            <dt>Restaurant item rating</dt>
            <dd><strong><?= number_format($average, 1) ?>/5</strong> · <?= count($ratings) ?> reviews</dd>
        </div>
        <div>
            <dt>Menu items</dt>
            <dd><?= count($items) ?></dd>
        </div>
    </section>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Menu item</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Average rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item):
                    $itemAvg = array_sum(array_column($item['reviews'], 'rating')) / count($item['reviews']); ?>
                    <tr>
                        <th><?= htmlspecialchars($item['name']) ?></th>
                        <td><?= htmlspecialchars($item['category']) ?></td>
                        <td>$<?= number_format($item['price'], 2) ?></td>
                        <td><?= number_format($itemAvg, 1) ?> / 5</td>
                        <td>
                            <div class="actions"><a class="button"
                                    href="view.php?id=<?= $item['id'] ?>&restaurant_id=<?= $restaurantId ?>">Reviews</a><a
                                    class="button"
                                    href="edit.php?id=<?= $item['id'] ?>&restaurant_id=<?= $restaurantId ?>">Edit</a><a
                                    class="button"
                                    href="delete.php?id=<?= $item['id'] ?>&restaurant_id=<?= $restaurantId ?>">Remove</a>
                            </div>
                        </td>
                    </tr><?php endforeach; ?>
            </tbody>
        </table>
    </div><a class="back-link" href="../restaurants/view.php?id=<?= $restaurantId ?>">&larr; Back to Restaurant</a>
</main><?php require_once '../includes/footer.php'; ?>