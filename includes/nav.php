<?php
$currentPage = basename($_SERVER['PHP_SELF']);

function navLinkClasses(string $page, string $currentPage): string
{
    return $page === $currentPage
        ? 'border-b-2 border-gray-900 pb-1 font-semibold text-gray-900'
        : 'text-gray-800 hover:text-gray-600';
}
?>

<nav class="flex items-center justify-between bg-gray-100 px-8 py-4">
  <a href="index.php" class="text-xl font-bold text-gray-900">
    Craving Index
  </a>

  <ul class="flex items-center gap-7 text-sm">
    <li>
      <a href="index.php"
         class="<?= navLinkClasses('index.php', $currentPage) ?>"
         <?= $currentPage === 'index.php' ? 'aria-current="page"' : '' ?>>
        Home
      </a>
    </li>
    <li>
      <a href="restaurants.php"
         class="<?= navLinkClasses('restaurants.php', $currentPage) ?>"
         <?= $currentPage === 'restaurants.php' ? 'aria-current="page"' : '' ?>>
        Restaurants
      </a>
    </li>
    <li class="border-l border-gray-300 pl-6">
      <a href="administrator.php"
         class="<?= navLinkClasses('administrator.php', $currentPage) ?>"
         <?= $currentPage === 'administrator.php' ? 'aria-current="page"' : '' ?>>
        Administrator
      </a>
    </li>
  </ul>
</nav>