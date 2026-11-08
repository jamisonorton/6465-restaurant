<?php
// ------------------------------------------------------------
// Craving Index - Login Page (security/login.php)
// Mid-term version: front end only, no database.
// Final project: on POST, look up the user and check the
// password with password_verify(), then start a session.
// ------------------------------------------------------------

require_once __DIR__ . '/../includes/header.php';
require_once __DIR__ . '/../includes/nav.php';
?>

<main class="min-h-[70vh] flex items-center justify-center px-4 py-12 bg-gray-50">
  <div class="w-full max-w-md bg-white rounded-lg shadow p-8">

    <h1 class="text-2xl font-bold text-center mb-1">Welcome back</h1>
    <p class="text-center text-gray-600 mb-6">Log in to review dishes and follow restaurants.</p>

    <!-- Final: handled with PHP + DB. For now it posts to itself and does nothing. -->
    <form action="login.php" method="post" class="space-y-4" novalidate>

      <div>
        <label for="email" class="block text-sm font-medium mb-1">Email</label>
        <input id="email" name="email" type="email" required autocomplete="email"
               placeholder="you@example.com"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
      </div>

      <div>
        <div class="flex justify-between items-baseline mb-1">
          <label for="password" class="block text-sm font-medium">Password</label>
          <a href="#" class="text-sm text-red-600 hover:underline">Forgot password?</a>
        </div>
        <input id="password" name="password" type="password" required minlength="8"
               autocomplete="current-password"
               class="w-full border rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-red-600">
      </div>

            <div style="display: flex; align-items: center; gap: 0.5rem;">
        <input id="remember" name="remember" type="checkbox" style="width: auto; flex: none; margin: 0;">
        <label for="remember" class="text-sm" style="display: inline; width: auto; margin: 0;">Remember me</label>
      </div>

      <button type="submit"
              class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold rounded py-2">
        Log In
      </button>
    </form>

    <p class="text-center text-sm text-gray-600 mt-6">
      New to Craving Index?
      <!-- Final: link to a register page (Users CRUD - create) -->
      <a href="#" class="text-red-600 font-semibold hover:underline">Create an account</a>
    </p>

    <p class="text-center text-xs text-gray-400 mt-4">
      We never share your email. Admins and regular users log in here.
    </p>
  </div>
</main>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>