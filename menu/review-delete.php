<?php require_once '../includes/header.php';
require_once '../includes/nav.php';
$rid = (int) ($_GET['restaurant_id'] ?? 1); ?>
<main class="page-container"><a class="back-link" href="view.php?id=1&restaurant_id=<?= $rid ?>">&larr; Back to Item</a>
    <h1>Delete Review</h1>
    <p>Delete this review and its rating?</p>
    <p class="secondary-text">Prototype only: this action does not delete data.</p>
    <form>
        <div class="form-actions"><button class="button button-primary">Confirm Delete</button><a class="button"
                href="view.php?id=1&restaurant_id=<?= $rid ?>">Cancel</a></div>
        <p id="msg" role="status"></p>
    </form>
</main>
<script>document.querySelector('form').addEventListener('submit', e => { e.preventDefault(); document.getElementById('msg').textContent = 'Prototype preview: no review was deleted.' })</script>
</body>

</html>