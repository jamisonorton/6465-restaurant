<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

        <title>My Website</title>
    </head>

    <body class="bg-gray-100 min-h-screen">

        <!-- Navigation Bar -->
        <nav class="bg-gray-800 px-10 py-5 flex justify-between items-center">
            <a href="index.html" class="text-white text-2xl font-bold">
                My Website
            </a>

            <ul class="hidden md:flex gap-8">
                <li>
                    <a href="index.html" class="text-white hover:text-blue-400">
                        Home
                    </a>
                </li>

                <li>
                    <a href="about.html" class="text-white hover:text-blue-400">
                        About
                    </a>
                </li>

                <li>
                    <a href="contact.html" class="text-white hover:text-blue-400">
                        Contact
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="max-w-md mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg items-center justify-center">
            <h1 class="text-3xl font-bold text-blue-600">
                Hello Tailwind!
            </h1>

            <p class="mt-4 text-gray-600">
                This is a plain HTML website using Tailwind CSS.
            </p>

            <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                Click Me
            </button>
        </main>

    </body>
</html>