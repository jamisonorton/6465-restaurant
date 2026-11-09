<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="view.php?id=1&restaurant_id=<?= $rid ?>">&larr; Back to Item</a>
    <h1>Edit Item Review</h1>
    <p class="subtitle">Update review text or rating.</p>
    <hr class="section-divider">
    <p class="secondary-text">Prototype only: this form does not save changes.</p>
    <form>
        <div class="form-grid">
            <div><label for="rating">Rating *</label><select id="rating" required>
                    <option>5</option>
                    <option>4</option>
                    <option>3</option>
                    <option>2</option>
                    <option>1</option>
                </select></div>
            <div class="full-width"><label for="review">Review *</label><textarea id="review"
                    required>Rich and perfectly cooked.</textarea></div>
        </div>
        <div class="form-actions"><button class="button button-primary">Save Changes</button><a class="button"
                href="view.php?id=1&restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: your changes were not saved.' })</script>
</body>

</html>