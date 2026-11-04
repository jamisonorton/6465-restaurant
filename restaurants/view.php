<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canyon Kitchen | Craving Index</title>
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
                <h1>Canyon Kitchen</h1>
                <p><span class="status">Active</span></p>
                <p class="subtitle">Restaurant profile</p>
            </div>

            <a class="button button-primary" href="edit.php?id=1">
                Edit Restaurant
            </a>
        </div>

        <hr class="section-divider">

        <dl class="details-grid">
            <div>
                <dt>Cuisine</dt>
                <dd>American</dd>
            </div>

            <div>
                <dt>Phone</dt>
                <dd>(801) 555-0142</dd>
            </div>

            <div class="full-width">
                <dt>Address</dt>
                <dd>123 Example Street, Salt Lake City, UT 84101</dd>
            </div>

            <div class="full-width">
                <dt>Description</dt>
                <dd>
                    A casual neighborhood restaurant serving burgers,
                    sandwiches, and fresh salads.
                </dd>
            </div>
        </dl>

        <hr class="section-divider">

        <section class="archive-section" aria-labelledby="archive-heading">
            <div>
                <h2 id="archive-heading">Archive restaurant</h2>
                <p class="secondary-text">
                    Hide this restaurant from public listings while
                    preserving its menu items and reviews.
                </p>
                <p class="secondary-text">
                    Prototype only: this button does not save changes.
                </p>
            </div>

            <button class="button" type="button">
                Archive Restaurant
            </button>
        </section>

        <footer class="site-footer">
            Craving Index — fictional sample data
        </footer>
    </main>
</body>
</html>