<nav class="bg-blue-600 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white text-2xl font-bold">MyApp</a>
        <ul class="flex space-x-6">
          
            <li>
                <a href="/home" class="text-white hover:text-blue-200 transition">Home</a>
            </li>
            <li>
                <a href="/about" class="text-white hover:text-blue-200 transition">About</a>
            </li>
            <li>
                <a href="{{ route('con') }}" class="text-white hover:text-blue-200 transition">Contact</a>
            </li>
        </ul>
    </div>
</nav>