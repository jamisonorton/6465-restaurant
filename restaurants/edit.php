<?php
require_once '../includes/header.php';
require_once '../includes/nav.php';

?>
<main class="page-container">
    <a class="back-link" href="view.php?id=1">
        &larr; Back to Restaurant
    </a>

    <div class="page-heading">
        <div>
            <h1>Edit Restaurant</h1>
            <p class="subtitle">
                Update the restaurant’s profile information.
                Fields marked * are required.
            </p>
        </div>
    </div>

    <hr class="section-divider">

    <p id="prototype-note" class="secondary-text">
        Prototype only: this form does not save restaurant information.
    </p>

    <form aria-describedby="prototype-note">
        <div class="form-grid">
            <div>
                <label for="name">Restaurant name *</label>
                <input type="text" id="name" name="name" value="Canyon Kitchen" placeholder="Enter restaurant name"
                    required>
            </div>

            <div>
                <label for="cuisine">Category / cuisine *</label>
                <input type="text" id="cuisine" name="cuisine" value="American" placeholder="Enter category or cuisine"
                    required>
            </div>

            <div class="full-width">
                <label for="address">Address *</label>
                <input type="text" id="address" name="address" value="123 Example Street, Salt Lake City, UT 84101"
                    placeholder="Street address, city, state, ZIP" required>
            </div>

            <div>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" value="(801) 555-0142" placeholder="Enter phone number">
            </div>

            <div>
                <label for="status">Status *</label>
                <select id="status" name="status" required>
                    <option value="active" selected>Active</option>
                    <option value="archived">Archived</option>
                </select>
            </div>

            <div class="full-width">
                <label for="description">Description</label>
                <textarea id="description"
                    name="description">A casual neighborhood restaurant serving burgers, sandwiches, and fresh salads.</textarea>
            </div>
        </div>

        <div class="form-actions">
            <button class="button button-primary" type="submit">
                Save Changes
            </button>
            <a class="button" href="view.php?id=1">Cancel</a>
        </div>

        <p id="form-message" role="status"></p>
    </form>

    <footer class="site-footer">Craving Index</footer>
</main>

<script>
    const form = document.querySelector("form");
    const message = document.getElementById("form-message");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        message.textContent =
            "Prototype preview: your changes were not saved.";
    });
</script>
</body>

</html>