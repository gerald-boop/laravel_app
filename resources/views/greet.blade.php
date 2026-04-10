<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greet</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-400 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">
    <div class="bg-white p-8 rounded-lg shadow-2xl max-w-md w-full text-center">
        <h1 class="text-3xl font-bold text-gray-800 mb-4">Welcome to Laravel!</h1>
        <p class="text-gray-600">In fulfillment for CIT18</p>
        <a href="{{ route('tasks.index') }}" class="inline-block mt-6 px-6 py-3 text-white font-semibold bg-blue-600 rounded-lg shadow-lg hover:bg-blue-700 transition-colors">
            Go to Index page
        </a>
    </div>
</body>
</html>
