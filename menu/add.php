<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="index.php?restaurant_id=<?= $rid ?>">&larr; Back to Menu</a>
    <div class="page-heading">
        <div>
            <h1>Add Menu Item</h1>
            <p class="subtitle">Add a dish to this restaurant’s menu.</p>
        </div>
    </div>
    <hr class="section-divider">
    <p class="secondary-text">Prototype only: this form does not save menu information.</p>
    <form>
        <div class="form-grid">
            <div><label for="name">Item name *</label><input id="name" name="name" required
                    placeholder="e.g. Signature Truffle Burger"></div>
            <div><label for="category">Category *</label><input id="category" name="category" required
                    placeholder="Entrées"></div>
            <div><label for="price">Price *</label><input id="price" name="price" type="number" min="0" step="0.01"
                    required placeholder="18.50"></div>
            <div class="full-width"><label for="description">Description</label><textarea id="description"
                    name="description" placeholder="Describe the dish and ingredients"></textarea></div>
        </div>
        <div class="form-actions"><button class="button button-primary" type="submit">Add Menu Item</button><a
                class="button" href="index.php?restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: no menu item was saved.' })</script>
</body>

</html>