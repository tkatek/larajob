<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>LaraJob</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100 text-gray-900">
        
        <nav class="flex justify-between items-center p-4 bg-white shadow-md mb-6">
            <a href="/" class="text-2xl font-bold text-red-500">Lara<span class="text-black">Job</span></a>
            <a href="/listings/create" class="hover:text-red-500">Post a Job</a>
        </nav>

        <main class="container mx-auto p-4">
            {{ $slot }}
        </main>

        <footer class="fixed bottom-0 left-0 w-full flex items-center justify-center font-bold bg-red-500 text-white h-12 mt-24 opacity-90 md:justify-center">
            <p class="ml-2">Copyright &copy; 2026, All Rights reserved</p>
        </footer>
    </body>
</html>