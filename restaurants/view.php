<?php
require_once '../includes/header.php';
require_once '../includes/nav.php';

?>

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

    <section class="archive-section" aria-labelledby="menu-heading">
        <div>
            <h2 id="menu-heading">Menu items and reviews</h2>
            <p class="secondary-text">Manage dishes, review item feedback, and see the restaurant’s aggregate rating.
            </p>
        </div>
        <a class="button button-primary" href="../menu/index.php?restaurant_id=1">Manage Menu</a>
    </section>

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