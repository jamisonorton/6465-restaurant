<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="view.php?id=1&restaurant_id=<?= $rid ?>">&larr; Back to Item</a>
    <div class="page-heading">
        <div>
            <h1>Edit Menu Item</h1>
            <p class="subtitle">Update dish details shown on the restaurant menu.</p>
        </div>
    </div>
    <hr class="section-divider">
    <p class="secondary-text">Prototype only: this form does not save changes.</p>
    <form>
        <div class="form-grid">
            <div><label for="name">Item name *</label><input id="name" name="name" value="Signature Truffle Burger"
                    required></div>
            <div><label for="category">Category *</label><input id="category" name="category" value="Entrées" required>
            </div>
            <div><label for="price">Price *</label><input id="price" name="price" type="number" min="0" step="0.01"
                    value="18.50" required></div>
            <div class="full-width"><label for="description">Description</label><textarea id="description"
                    name="description">House-ground beef, truffle aioli, aged cheddar.</textarea></div>
        </div>
        <div class="form-actions"><button class="button button-primary" type="submit">Save Changes</button><a
                class="button" href="view.php?id=1&restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: your changes were not saved.' })</script>
</body>

</html>