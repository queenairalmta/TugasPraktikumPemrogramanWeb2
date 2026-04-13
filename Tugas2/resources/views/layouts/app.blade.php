<!DOCTYPE html>
<html lang="en">
<head>
    <title>Website Queenaira</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px);}
            to { opacity: 1; transform: translateY(0);}
        }
    </style>
</head>
<body class="flex flex-col min-h-screen bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-green-400 to-green-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">MyWebsite</h1>
            
            <ul class="flex gap-6">
                <li>
                    <a href="/" class="hover:text-gray-200 hover:scale-110 transition">Home</a>
                </li>
                <li>
                    <a href="/about" class="hover:text-gray-200 hover:scale-110 transition">About</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-gray-200 hover:scale-110 transition">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content -->
    <main class="flex-grow container mx-auto p-6 fade-in">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center p-4 mt-6">
        <p>© 2026 - Dibuat oleh Queenaira</p>
    </footer>

</body>
</html>