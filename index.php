<?php
require_once 'includes/header.php';
require_once 'includes/nav.php';

?>
<!-- Main Content -->
<main>
  <?php
  // ===== Craving Index home page content (goes inside the <main> tag of index.php) =====
// Mid-term: sample data in arrays, no database. Final: replace arrays with DB queries.
  
  $categories = ["Burgers", "Pizza", "Mexican", "Sushi", "BBQ", "Vegan", "Breakfast", "Desserts"];

  // Sample featured restaurants (final: restaurants with an active premium subscription)
  $featured = [
    ["id" => 1, "name" => "The Copper Grill", "category" => "Burgers", "city" => "Salt Lake City", "score" => 4.7, "followers" => 1240],
    ["id" => 2, "name" => "Sakura Roll House", "category" => "Sushi", "city" => "Sandy", "score" => 4.5, "followers" => 980],
    ["id" => 3, "name" => "Casa Verde Cantina", "category" => "Mexican", "city" => "Provo", "score" => 4.6, "followers" => 1105],
  ];

  // Sample top-rated dishes (final: AVG(rating) from Reviews grouped by Food_Items)
  $topDishes = [
    ["dish" => "Signature Truffle Burger", "restaurant" => "The Copper Grill", "rating" => 4.9, "reviews" => 212],
    ["dish" => "Spicy Tuna Crunch Roll", "restaurant" => "Sakura Roll House", "rating" => 4.8, "reviews" => 167],
    ["dish" => "Birria Tacos", "restaurant" => "Casa Verde Cantina", "rating" => 4.8, "reviews" => 189],
    ["dish" => "Brisket Plate", "restaurant" => "Smoke & Oak BBQ", "rating" => 4.7, "reviews" => 143],
  ];

  // Helper: turn a 4.7 score into ★★★★☆ text
  function stars($score)
  {
    $full = (int) round($score);
    return str_repeat("★", $full) . str_repeat("☆", 5 - $full);
  }
  ?>

  <!-- HERO + SEARCH -->
  <section class="bg-gray-900 text-white py-20 px-4 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4">Rate the dish, not just the place.</h1>
    <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
      Craving Index scores restaurants by their individual menu items, so you know exactly what to order before you go.
    </p>

    <!-- Search form: posts nowhere yet (no DB). Final: action="restaurants/search.php" -->
    <form action="#" method="get" class="max-w-3xl mx-auto flex flex-col md:flex-row gap-3">
      <label for="q" class="sr-only">Search dishes or restaurants</label>
      <input id="q" name="q" type="text" placeholder="Search a dish or restaurant..."
        class="flex-1 rounded px-4 py-3 text-gray-900" style="flex: 1; min-width: 16rem;">
      <label for="location" class="sr-only">Location</label>
      <input id="location" name="location" type="text" placeholder="City or ZIP"
        class="md:w-48 rounded px-4 py-3 text-gray-900">

      <label for="category" class="sr-only">Category</label>
      <select id="category" name="category" class="md:w-44 rounded px-4 py-3 text-gray-900">
        <option value="">All categories</option>
        <?php foreach ($categories as $cat): ?>
          <option value="<?= htmlspecialchars($cat) ?>"><?= htmlspecialchars($cat) ?></option>
        <?php endforeach; ?>
      </select>

      <button type="submit" class="bg-red-600 hover:bg-red-700 rounded px-6 py-3 font-semibold">Search</button>
    </form>
  </section>

  <!-- BROWSE BY CATEGORY -->
  <section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-6">Browse by category</h2>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
      <?php foreach ($categories as $cat): ?>
        <a href="#" class="block border rounded-lg p-4 text-center font-medium hover:shadow-md hover:border-red-600">
          <?= htmlspecialchars($cat) ?>
        </a>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- FEATURED RESTAURANTS (premium placement) -->
  <section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4">
      <h2 class="text-2xl font-bold mb-1">Featured restaurants</h2>
      <p class="text-sm text-gray-500 mb-6">Sponsored placement for premium restaurant partners.</p>

      <div class="grid md:grid-cols-3 gap-6">
        <?php foreach ($featured as $r): ?>
          <article class="bg-white rounded-lg shadow overflow-hidden">
            <div class="w-full h-44 bg-gray-200 flex items-center justify-center text-gray-500 text-lg font-semibold">
              <?= htmlspecialchars($r["category"]) ?>
            </div>
            <div class="p-4">
              <span class="text-xs uppercase tracking-wide text-red-600 font-semibold">Featured</span>
              <h3 class="text-lg font-bold"><?= htmlspecialchars($r["name"]) ?></h3>
              <p class="text-sm text-gray-600"><?= htmlspecialchars($r["category"]) ?> ·
                <?= htmlspecialchars($r["city"]) ?></p>
              <p class="mt-2">
                <span class="text-yellow-500" aria-hidden="true"><?= stars($r["score"]) ?></span>
                <span class="font-semibold"><?= number_format($r["score"], 1) ?></span>
                <span class="text-sm text-gray-500">dish score · <?= number_format($r["followers"]) ?> followers</span>
              </p>
              <!-- Final: link to the restaurant detail page from Use Case 2, e.g. restaurants/view.php?id= -->
              <a href="restaurants/" class="inline-block mt-3 text-red-600 font-semibold hover:underline">View menu →</a>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- TOP-RATED DISHES -->
  <section class="max-w-6xl mx-auto px-4 py-12">
    <h2 class="text-2xl font-bold mb-6">Top-rated dishes this week</h2>
    <ol class="divide-y border rounded-lg">
      <?php foreach ($topDishes as $i => $d): ?>
        <li class="flex items-center justify-between p-4">
          <div>
            <span class="text-gray-400 font-bold mr-3">#<?= $i + 1 ?></span>
            <span class="font-semibold"><?= htmlspecialchars($d["dish"]) ?></span>
            <span class="text-gray-500"> at <?= htmlspecialchars($d["restaurant"]) ?></span>
          </div>
          <div class="text-right">
            <span class="text-yellow-500" aria-hidden="true"><?= stars($d["rating"]) ?></span>
            <span class="font-semibold"><?= number_format($d["rating"], 1) ?></span>
            <span class="block text-xs text-gray-500"><?= $d["reviews"] ?> reviews</span>
          </div>
        </li>
      <?php endforeach; ?>
    </ol>
  </section>

  <!-- HOW IT WORKS -->
  <section class="bg-gray-50 py-12">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-3 gap-8 text-center">
      <div>
        <h3 class="text-lg font-bold mb-2">1. Find a restaurant</h3>
        <p class="text-gray-600">Search by category, location or popularity.</p>
      </div>
      <div>
        <h3 class="text-lg font-bold mb-2">2. Review the dish</h3>
        <p class="text-gray-600">Rate specific menu items, not just the whole visit.</p>
      </div>
      <div>
        <h3 class="text-lg font-bold mb-2">3. Follow your favorites</h3>
        <p class="text-gray-600">Keep up with the places you love most.</p>
      </div>
    </div>
  </section>

  <!-- CALL TO ACTION -->
  <section class="max-w-6xl mx-auto px-4 py-12 text-center">
    <h2 class="text-2xl font-bold mb-3">Ready to share what you're craving?</h2>
    <!-- Login page lives in the security folder -->
    <a href="security/login.php"
      class="inline-block bg-red-600 hover:bg-red-700 text-white rounded px-6 py-3 font-semibold">
      Log in to write a review
    </a>
  </section>
</main>

<?php require_once 'includes/footer.php'; ?>