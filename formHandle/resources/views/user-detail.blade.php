<!DOCTYPE html>
<html>
<head>
  <title>User Detail</title>
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h1 class="text-2xl font-bold mb-6 text-center text-blue-700">User Detail</h1>
    <p class="mb-4"><strong class="text-gray-700">Name:</strong> <span class="text-gray-900">{{ $name }}</span></p>
    <p><strong class="text-gray-700">Email:</strong> <span class="text-gray-900">{{ $email }}</span></p>
  </div>
</body>
</html>