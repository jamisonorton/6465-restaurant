<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="index.php?restaurant_id=<?= $rid ?>">&larr; Back to Menu</a>
    <div class="page-heading">
        <div>
            <h1>Remove Menu Item</h1>
            <p class="subtitle">Discontinue Signature Truffle Burger?</p>
        </div>
    </div>
    <hr class="section-divider">
    <p>Removing a menu item should preserve its historical reviews and their links to the item.</p>
    <p class="secondary-text">Prototype only: no data will be deleted.</p>
    <form>
        <div class="form-actions"><button class="button button-primary" type="submit">Confirm Removal</button><a
                class="button" href="index.php?restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: no menu item was removed.' })</script>
</body>

</html>