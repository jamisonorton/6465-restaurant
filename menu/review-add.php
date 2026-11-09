<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="view.php?id=1&restaurant_id=<?= $rid ?>">&larr; Back to Item</a>
    <h1>Add Item Review</h1>
    <p class="subtitle">Signature Truffle Burger</p>
    <hr class="section-divider">
    <p class="secondary-text">Prototype only: this form does not save reviews.</p>
    <form>
        <div class="form-grid">
            <div><label for="rating">Rating *</label><select id="rating" required>
                    <option value="">Choose rating</option><?php for ($i = 1; $i <= 5; $i++): ?>
                        <option value="<?= $i ?>"><?= $i ?> / 5</option><?php endfor; ?>
                </select></div>
            <div class="full-width"><label for="review">Review *</label><textarea id="review" required
                    placeholder="Share your experience with this dish"></textarea></div>
        </div>
        <div class="form-actions"><button class="button button-primary">Add Review</button><a class="button"
                href="view.php?id=1&restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: no review was saved.' })</script>
</body>

</html>