<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Restaurant | Craving Index</title>
    <link rel="stylesheet" href="restaurants.css">
</head>
<body>
    <header class="site-header">
        <div class="header-content">
            <a class="brand" href="../index.php">Craving Index</a>

            <nav class="site-nav" aria-label="Main navigation">
                <a href="../index.php">Home</a>
                <a href="index.php">Restaurants</a>
                <span class="role-label">Administrator</span>
            </nav>
        </div>
    </header>

    <main class="page-container">
        <a class="back-link" href="index.php">
            &larr; Back to Restaurants
        </a>

        <div class="page-heading">
            <div>
                <h1>Add Restaurant</h1>
                <p class="subtitle">
                    Enter the restaurant’s profile information.
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
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter restaurant name"
                        required
                    >
                </div>

                <div>
                    <label for="cuisine">Category / cuisine *</label>
                    <input
                        type="text"
                        id="cuisine"
                        name="cuisine"
                        placeholder="Enter category or cuisine"
                        required
                    >
                </div>

                <div class="full-width">
                    <label for="address">Address *</label>
                    <input
                        type="text"
                        id="address"
                        name="address"
                        placeholder="Street address, city, state, ZIP"
                        required
                    >
                </div>

                <div>
                    <label for="phone">Phone</label>
                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter phone number"
                    >
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
                    <textarea
                        id="description"
                        name="description"
                        placeholder="Describe the restaurant"
                    ></textarea>
                </div>
            </div>

            <div class="form-actions">
                <button class="button button-primary" type="submit">
                    Add Restaurant
                </button>
                <a class="button" href="index.php">Cancel</a>
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
                "Prototype preview: no restaurant was saved.";
        });
    </script>
</body>
</html>